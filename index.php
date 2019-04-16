<?php
include('database_connection.php');
session_start();
if(!isset ($_SESSION['user_id'])){
    header("Location:login.php");
}
?>

<html>  
    <head>  
        <title>Hippo Campus Live Chat Application</title>  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"   crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
    </head>  

    <style>

		html{
			font-size: 1rem;
		}

        .chat_message_area
        {
            position: relative;
            width: 100%;
            height: auto;
            background-color: #FFF;
            border: 1px solid #CCC;
            border-radius: 3px;
        }

        /* #group_chat_message
        {
            width: 100%;
            height: auto;
            min-height: 80px;
            overflow: auto;
            padding:6px 24px 6px 12px;
        } */

        .image_upload
        {
            position: absolute;
            top:3px;
            right:3px;
        }
        .image_upload > form > input
        {
            display: none;
        }

        .image_upload img
        {
            width: 24px;
            cursor: pointer;
        }

		.navigation__checkbox {
			display: none;
		}
		.navigation__button {
			background-color: #28B9B5;
			height: 7rem;
			width: 7rem;
			position: fixed;
			top: 3rem;
			right: 3rem;
			border-radius: 50%;
			z-index: 2000;
			box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
			text-align: center;
			cursor: pointer;
		}
		.navigation__background {
			height: 6rem;
			width: 6rem;
			border-radius: 50%;
			position: fixed;
			top: 3.5rem;
			right:3.5rem;
			background-image: radial-gradient(#232526, #28b485);
			z-index: 1000;
			transition: transform 0.8s cubic-bezier(0.86, 0, 0.07, 1);
		}
		.navigation__nav {
			height: 100vh;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1500;
			opacity: 0;
			width: 0;
			transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
		}
		.navigation__list {
			
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			list-style: none;
			text-align: center;
			width: 100%;
		}
		.navigation__item {
			margin: 1rem;
		}
		.navigation__link:link, .navigation__link:visited {
			display: inline-block;
			font-size: 2rem;
			font-weight: 300;
			padding: 1rem 2rem;
			color: #fff;
			text-decoration: none;
			text-transform: uppercase;
			background-image: linear-gradient(120deg, transparent 0%, transparent 50%, #fff 50%);
			background-size: 220%;
			transition: all 0.4s;
		}
		.navigation__link:link span, .navigation__link:visited span {
			margin-right: 1.5rem;
			display: inline-block;
		}
		.navigation__link:hover, .navigation__link:active {
			background-position: 100%;
			color: #202224;
			transform: translateX(1rem);
		}
		.navigation__checkbox:checked ~ .navigation__background {
			transform: scale(80);
		}
		.navigation__checkbox:checked ~ .navigation__nav {
			opacity: 1;
			width: 100%;
		}
		.navigation__icon {
			position: relative;
			margin-top: 3.5rem;
		}
		.navigation__icon, .navigation__icon::before, .navigation__icon::after {
			width: 3rem;
			height: 2px;
			background-color: #333;
			display: inline-block;
		}
		.navigation__icon::before, .navigation__icon::after {
			content: "";
			position: absolute;
			left: 0;
			transition: all 0.2s;
		}
		.navigation__icon::before {
			top: -0.8rem;
		}
		.navigation__icon::after {
			top: 0.8rem;
		}
		.navigation__button:hover .navigation__icon::before {
			top: -1rem;
		}
		.navigation__button:hover .navigation__icon::after {
			top: 1rem;
		}
		.navigation__checkbox:checked + .navigation__button .navigation__icon {
			background-color: transparent;
		}
		.navigation__checkbox:checked + .navigation__button .navigation__icon::before {
			top: 0;
			transform: rotate(135deg);
		}
		.navigation__checkbox:checked + .navigation__button .navigation__icon::after {
			top: 0;
			transform: rotate(-135deg);
		}


    </style>  

    <body>  
		<div class="navigation">
			<input type="checkbox" class="navigation__checkbox" id="navi-toggle">

			<label for="navi-toggle" class="navigation__button">
				<span class="navigation__icon">&nbsp;</span>
			</label>

			<div class="navigation__background">&nbsp;</div>

			<nav class="navigation__nav">
				<ul class="navigation__list">
					<li class="navigation__item" target="_blank"><a href="#" class="navigation__link" target="_blank"><span>01</span>Hippo Campus</a></li>
					<li class="navigation__item" target="_blank"><a href="bambi2.html" class="navigation__link"><span>02</span>Bambi</a></li>
					<li class="navigation__item" target="_blank"><a href="landmark2.html" class="navigation__link"><span>03</span>Landmark</a></li>
					<li class="navigation__item" target="_blank"><a href="budget.html" class="navigation__link"><span>04</span>Finance</a></li>
					<li class="navigation__item" target="_blank"><a href="about.php" class="navigation__link"><span>05</span>Developers</a></li>
					<li class="navigation__item">
					<li class="navigation__item" target="_blank"><a href="index.php" class="navigation__link"><span>06</span>Live chat</a></li>
					<li class="navigation__item" target="_blank"><a href="logout.php" class="navigation__link"><span>07</span>Logout</a></li>
					</ul>
			</nav>
		</div>
        <div class="container">
            <br />
            
            <h3 style="text-align:center">Chat Application using PHP Ajax Jquery</a></h3><br />
            <br />
            
            <div class="table-responsive">
                <h4 style="text-align: center">Online User</h4>
                <p style="text-align: right">Hi - <?php echo $_SESSION['username']; ?> - <a href="logout.php">Logout</a></p>
                <div id="user_details"></div>
                <div id="user_model_details"></div>
            </div>
        </div>

        <div id="group_chat_dialog" title="Group Chat Window">
            <div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">
            </div>
            <div class="form-group">
                <textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>
            </div>
            <div class="form-group" style="text-align:right">
                <button type="button" name="send_group_chat" id ="send_group_chat" class="btn btn-info">Send</button>
            </div>
        </div>

        <input type="hidden" id="is_active_group_chat_window" value="no" />
        <!-- <button style="margin-left:150px; margin-bottom: 50px; margin-top: 50px type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-xs">Group Chat</button> -->
            <br>

    </body>  
</html>  


<script>  
$(document).ready(function(){

	fetch_user();

	setInterval(function(){
		update_last_activity();
		fetch_user();
		update_chat_history_data();
		fetch_group_chat_history();
	}, 5000);

	function fetch_user()
	{
		$.ajax({
			url:"fetch_user.php",
			method:"POST",
			success:function(data){
				$('#user_details').html(data);
			}
		})
	}

	function update_last_activity()
	{
		$.ajax({
			url:"update_last_activity.php",
			success:function()
			{

			}
		})
	}

	function make_chat_dialog_box(to_user_id, to_user_name)
	{
		var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
		modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
		modal_content += fetch_user_chat_history(to_user_id);
		modal_content += '</div>';
		modal_content += '<div class="form-group">';
		modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
		modal_content += '</div><div class="form-group" align="right">';
		modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
		$('#user_model_details').html(modal_content);
	}

	$(document).on('click', '.start_chat', function(){
		var to_user_id = $(this).data('touserid');
		var to_user_name = $(this).data('tousername');
		make_chat_dialog_box(to_user_id, to_user_name);
		$("#user_dialog_"+to_user_id).dialog({
			autoOpen:false,
			width:400
		});
		$('#user_dialog_'+to_user_id).dialog('open');
		$('#chat_message_'+to_user_id).emojioneArea({
			pickerPosition:"top",
			toneStyle: "bullet"
		});
	});

	$(document).on('click', '.send_chat', function(){
		var to_user_id = $(this).attr('id');
		var chat_message = $('#chat_message_'+to_user_id).val();
		$.ajax({
			url:"insert_chat.php",
			method:"POST",
			data:{to_user_id:to_user_id, chat_message:chat_message},
			success:function(data)
			{
				//$('#chat_message_'+to_user_id).val('');
				var element = $('#chat_message_'+to_user_id).emojioneArea();
				element[0].emojioneArea.setText('');
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	});

	function fetch_user_chat_history(to_user_id)
	{
		$.ajax({
			url:"fetch_user_chat_history.php",
			method:"POST",
			data:{to_user_id:to_user_id},
			success:function(data){
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	}

	function update_chat_history_data()
	{
		$('.chat_history').each(function(){
			var to_user_id = $(this).data('touserid');
			fetch_user_chat_history(to_user_id);
		});
	}

	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
		$('#is_active_group_chat_window').val('no');
	});

	$(document).on('focus', '.chat_message', function(){
		var is_type = 'yes';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{

			}
		})
	});

	$(document).on('blur', '.chat_message', function(){
		var is_type = 'no';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{
				
			}
		})
	});

	$('#group_chat_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#group_chat').click(function(){
		$('#group_chat_dialog').dialog('open');
		$('#is_active_group_chat_window').val('yes');
		fetch_group_chat_history();
	});

	$('#send_group_chat').click(function(){
		var chat_message = $('#group_chat_message').html();
		var action = 'insert_data';
		if(chat_message != '')
		{
			$.ajax({
				url:"group_chat.php",
				method:"POST",
				data:{chat_message:chat_message, action:action},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
				}
			})
		}
	});

	function fetch_group_chat_history()
	{
		var group_chat_dialog_active = $('#is_active_group_chat_window').val();
		var action = "fetch_data";
		if(group_chat_dialog_active == 'yes')
		{
			$.ajax({
				url:"group_chat.php",
				method:"POST",
				data:{action:action},
				success:function(data)
				{
					$('#group_chat_history').html(data);
				}
			})
		}
	}

	$('#uploadFile').on('change', function(){
		$('#uploadImage').ajaxSubmit({
			target: "#group_chat_message",
			resetForm: true
		});
	});
	
});  
</script>
