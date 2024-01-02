<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="chat-section layout-top-spacing">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="chat-system">
                        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-menu mail-menu d-lg-none">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg></div>
                        <div class="user-list-box">
                            <div class="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <input type="text" class="form-control" placeholder="Search" />
                            </div>
                            <div class="people">
                                <?php foreach ($chatList as $user): ?>
                                    <div class="person border-none" data-chat="<?= $user->id ?>">
                                        <div class="user-info">
                                            <div class="f-head">
                                                <img src="<?= base_url('assets') ?>/img/90x90.jpg" alt="avatar">
                                            </div>
                                            <div class="f-body">
                                                <div class="meta-info">
                                                    <span class="user-name" data-name="<?= $user->nama ?>">
                                                        <?= $user->nama ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="chat-box">

                            <div class="chat-not-selected">
                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg> Click User To Chat</p>
                            </div>
                            <div class="chat-box-inner">
                                <div class="chat-meta-user">
                                    <div class="current-chat-user-name"><span><img src="assets/img/90x90.jpg"
                                                alt="dynamic-image"><span class="name"></span></span></div>
                                </div>
                            </div>
                            <div class="chat-conversation-box">
                                <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                                    <?php if (isset($chatUser)): ?>
                                        <?php foreach ($chatUser as $message): ?>
                                            <div class="chat" data-chat="person1">
                                                <div class="conversation-start">
                                                    <span><?= date('h:i A', strtotime($message->waktu)) ?></span>
                                                </div>
                                                <div class="bubble <?= ($message->id_user == $currentUserId) ? 'me' : 'you' ?>">
                                                    <?= $message->pesan ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="chat-input">
                                <form class="chat-form" action="<?= base_url('Chat/sendMessage') ?>" method="post" onsubmit="return submitForm(event)">
                                    <input type="hidden" name="userId" value="<?= $currentUserId ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <input type="text" name="message" class="mail-write-box form-control" placeholder="Message" id="chatMessageInput" />
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->

<script>
    function submitForm(event) {
        // Detect Enter key press (key code 13)
        if (event.keyCode === 13) {
            event.preventDefault(); // Prevent the default form submission
            document.getElementById('chatMessageInput').blur(); // Remove focus from the input
            document.forms[0].submit(); // Submit the form
        }
        return false;
    }
</script>
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/apps/mailbox-chat.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->