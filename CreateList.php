<?php // needs editing 
// session_start();
// require "./includes/library.php";

// //if user doesnt have a username and password set 
// if (!(isset($_SESSION['username']) && $_SESSION['password'] != '')) { // password or username instead of password
//     header("Location: Login.php");
//     exit();
// }

// // gets all the items in the list after cliking submit
// if (isset($_POST['submit'])) {
//     //Gets all the lists the user is associated with
//     $query = "SELECT id FROM `bucket_lists` WHERE fk_userid=?";
//     $statement = $pdo->prepare($query);
//     $statement->execute([$_SESSION['userID']]);
//     $userLists = $statement->fetchAll();

// if (isset($_POST['registry-title'])) {  // needs more coding
//     $date = date("Y-m-d");
//     $private = 0;
//     if (!empty($_POST['registry-password'])) {
//         $private = 1;
//     }

//     $query="INSERT INTO ` Gifty `(`title`, `fk_userid`, `created`, `description`, `private`) VALUES (?,?,?,?,?)";
//     $statement = $pdo->prepare($query);
//     $statement->execute([$_POST['title'], $_SESSION['userID'], $date, $_POST['description'], $private]);
//     header("Refresh:0");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/CreateList.css">
    <title>Create List</title>
    <script defer src="scripts/script.js"> </script>
</head>

<body>
    <!-- header containing log in and checkout button -->
     <!-- sub header showing Gift registry and wishlist -->
     <section id="nav" class=" ">
        <div class=" ">

            <nav class="main">
                <ul class="horizontal unstyled clearfix">

                    <li>
                        <a href="/" class="">
                            <span>Home</span></a>
                    </li>

                    <li class="dropdown"><a href="/apps/giftregistry" class=" current">
                            <span>Gift Registry</span></a>
                    </li>

                    <li>
                        <a href="/apps/giftregistry/wishlist" class="">
                            <span>Wishlist</span></a>
                    </li>

                </ul>
            </nav> <!-- /.main -->

        </div>
        
    </section>


    <!-- Logo of the weedding register shop -->
    <div class="logo">
        <h1>
        <a href="/"> Gifty </a>
        </h1>
    </div>



    <div class = " ">
        <h3> Create Your List </h3>
        <p> Complete the following information to create your List </P>
    </div>
    <div class="giftreggie-body">
        <!-- redirect the user to an account he has  -->
			<p><a href=" ">Already have a List? Click here to manage it.</a></p>  <!-- needs more coding -->
		
              <!-- form post submit -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" id=" " method="post" enctype="multipart/form-data">   <!-- needs more coding -->
				
<div class="registry-profile">
	<div class="registry-profile-block">
		<h4>List Profile</h4>
		<p>
			<span style="text-align:left;">List Title <input name="registry-title" type="text" value=""></span>
			
			<span>Event Date (DD/MM/YYYY) <input name="event-date" class="datepicker" type="text" placeholder="DD/MM/YYYY" value=""></span>
		</p>
		<p>
			<span style="text-align: left;">Description <textarea name="registry-description"></textarea></span>
			
				<span style="vertical-align:top;">
					<h4>Type of Event</h4>
					<select id="event-type" name="event-type" style="width: 100%;">
						<option>Wedding</option><option>Christmas</option><option>Birthday</option>
					</select>
				</span>
			
		</p>
		<p>
			<span>List Image <input type="file" name="registry-image"> </span></p><p>5MB Max File Size
		</p>
	</div>

	<div class="registry-profile-block">
		<span>
			<h4>Registry Protection <input type="checkbox" id="registry-protection"></h4>
			<p>If this is enabled, customers will not be able to view your registry without entering the password below.</p>
			<p>Password <input type="password" name="registry-password" placeholder="" disabled=""></p> <!-- needs more coding -->
		</span>
	</div>

		</span>
	</div>
			
</div>
<!-- <script type="text/javascript">
	window.jqReady.push(function(jQuery) {
		(function( $ ) {
			$('select.country-selector').val('Canada');
			
			
			
			
			$('input[name=registry-image]').change(function() {
				if (this.files[0].size >= 5*1024*1024) {
					alert("Images can be a maximum of 5 megabytes.");
					$(this).val('');
				}
			});
			
			$('#store-pickup').change(function() {
				if ($(this).val() == "1") {																
					$('#before-shipping-selector').val("Above").change();
					$('#after-shipping-selector').val("Above").change();
					$('#before-shipping-selector').attr('disabled', 'disabled');
					$('#after-shipping-selector').attr('disabled', 'disabled');
				} else {
					$('#before-shipping-selector').removeAttr('disabled');
					$('#after-shipping-selector').removeAttr('disabled');
					$('#before-shipping-selector').change();
					$('#after-shipping-selector').change();
				}
			});
			
			
			
			
			function toggleFields(value, ba) {
				if (value == 'below') {
					$('.' + ba + '-shipping input, .' + ba + '-shipping select').removeAttr('disabled');
				}
				else {
					$('.' + ba + '-shipping input, .' + ba + '-shipping select').attr('disabled', 'disabled');
					$('.' + ba + '-shipping input').val('');
				}
			}

			$('#before-shipping-selector').change(function() {
				toggleFields($(this).val(), "before");
			});
			$('#after-shipping-selector').change(function() {
				toggleFields($(this).val(), "after");
			});
			$('#registry-protection').click(function() {
				if (!$(this).is(":checked")) {
					$('input[name="registry-password"]').attr('disabled','disabled');
				} else {
					$('input[name="registry-password"]').removeAttr('disabled');
				}
				return true;
			});
		})(jQuery);
	});
</script> -->

								
				<p class="giftreggie-create-buttons">
					<input id="discard-changes" type="button" value="Discard Changes">
					<input type="submit" value="Create My Registry">
				</p>
			</form>
		</div>

</body>

</html>