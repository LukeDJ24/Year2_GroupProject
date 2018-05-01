<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['login'] != "OK") 
  {
    header('Location: ../index.php');
    exit();
  }
?> 
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Cardiff University LC</title>
    
   <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="../css/styling.css" rel="stylesheet">
    <script src="../js/script.js"></script>
    <link rel="shortcut icon" href="../favicon.ico" />
  </head>

  <body>


    <div class="container">

    <h1 class="mt-4 mb-3">Chat Bot - Terms and Conditions </h1>

<br><br>
1. TERMS
By accessing this bot for Messenger, you are agreeing to be bound by these bot Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this bot. The materials contained in this bot for Messenger are protected by applicable copyright and trade mark law.
<br><br>
2. USE LICENSE
1. Permission is granted to temporarily download one copy of the materials (information or software) on Personal Tutor Chatbot's pages, chats for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
<br><br>
1. Modify or copy the materials;
2. Use the materials for any commercial purpose, or for any public display (commercial or non-commercial);
3. Attempt to decompile or reverse engineer any software contained on Personal Tutor Chatbot's pages, chats;
4. Remove any copyright or other proprietary notations from the materials; or
5. Transfer the materials to another person or "mirror" the materials on any other server.
2. This license shall automatically terminate if you violate any of these restrictions and may be terminated by Personal Tutor Chatbot's at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
<br><br>
3. DISCLAIMER
The materials on Personal Tutor Chatbot's pages, chats are provided "as is". Personal Tutor Chatbot makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Personal Tutor Chatbot does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its pages or chats or otherwise relating to such materials or on any sites linked to this bot.
<br><br>
4. LIMITATIONS
In no event shall Personal Tutor Chatbot or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Personal Tutor Chatbot's pages, chats, even if Personal Tutor Chatbot or a Personal Tutor Chatbot authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
<br><br>
5. REVISIONS AND ERRATA
The materials appearing on Personal Tutor Chatbot's pages, chats could include technical, typographical, or photographic errors. Personal Tutor Chatbot does not warrant that any of the materials on its pages or chats are accurate, complete, or current. Personal Tutor Chatbot may make changes to the materials contained on its pages or chats at any time without notice. Personal Tutor Chatbot does not, however, make any commitment to update the materials.
<br><br>
6. LINKS
Personal Tutor Chatbot has not reviewed all of the sites linked to its pages or chats and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Personal Tutor Chatbot of the site. Use of any such linked pages or chats is at the user's own risk.
<br><br>
7. SITE TERMS OF USE MODIFICATIONS
Personal Tutor Chatbot may revise these terms of use for its pages or chats at any time without notice. By using this Personal Tutor Chatbot's pages, chats you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
<br><br>

  <center><button type="button" class="btn" onclick="CloseWindow()">Close Tab</button></center>
  <br><br>
  </div>
    
  </body>

</html>
