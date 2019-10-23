<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini Tchat | Discussion</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../assets/css/chat.css">
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="chat-list-box">
                    <div class="head-box">
                        <ul class="list-inline text-left d-inline-block float-left">
                            <li style="color: white; font-size: 20px">
                                Bienvenu <?php print strtoupper($_SESSION['pseudo']); ?>
                            </li>
                        </ul>
                        <ul class="list-inline text-left d-inline-block float-right">
                            <li style="color: white; font-size: 20px">
                                <a href="authentification.php">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <div class="chat-list-box">
                    <div class="head-box">
                        <ul class="list-inline text-left d-inline-block float-left">
                            <li style="color: white; font-size: 20px">Liste Connectés</li>
                        </ul>
                    </div>

                    <div class="chat-person-list">
                        <ul class="list-inline" id="bloc_users">
                            <?php foreach ($users as $user) { ?>
                                <li>
                                    <img src="https://i.ibb.co/6JpcfrK/p4.png" alt="">
                                    <span> <?php print $user["pseudo"]; ?> </span>
                                    <span class="chat-time"> <i class="fas fa-circle text-success"
                                                                id="back"></i> </span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="message-box">
                    <div class="head-box-1">
                        <ul class="msg-box list-inline text-left d-inline-block float-left">
                            <li style="color: white; font-size: 20px">Discussion</li>
                        </ul>
                    </div>

                    <div class="msg_history" id="bloc_messages">
                        <?php foreach ($messages as $message) { ?>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <?php print $message['message']; ?>
                                    <span class="time_date"> <b><?php print $message["pseudo"]; ?></b> | <?php print $message['date_post']; ?></span>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>

                    <div class="send-message">
                        <form action="" method="post">
                            <textarea class="form-control" id="message_area" name="message" placeholder="Votre message"
                                      required></textarea>
                            <ul class="list-inline">
                                <li>
                                    <button type="submit" value="Envoyer">
                                        Envoyer <i class="fas fa-paper-plane"></i>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="../assets/js/chat.js"></script>
</body>
</html>
