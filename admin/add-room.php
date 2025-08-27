<?php
    $title = "Add Room";
    require_once('./header.php');
    require_once('./sidebar.php');
?>


<!-- =============================================== dashboard overview section =========================================== -->
 <section class="all-dashboard">
    <div class="dashboard-content">
        <?php 
            require_once('./dash-sidebar.php');
        ?>

        <div class="dashboard-right">
            <?php 
                require_once('./navbar.php');
            ?>
    <!-- ============================================== dash body ==================================================== -->
            <div class="all-dash-body">

            <section class="all-add-new">
                <div class="add-new-content">
                    <div class="add-new-left">
                        <form action="">
                            <div class="airtime-input mb-3">
                                <label for="">Room Name</label>
                                <input class="p-3" type="text">
                            </div>
                            <div class="airtime-input mb-3">
                                <label for="">Bed Type</label>
                                <input class="p-3" type="text">
                            </div>
                            <div class="airtime-input mb-3">
                                <label for="">Room Floor</label>
                                <input class="p-3" type="text">
                            </div>
                            <div class="airtime-input mb-3">
                                <label for="">Room Amount</label>
                                <input class="p-3" type="number">
                            </div>
                            <div class="airtime-input mb-2">
                                <label for="">Description</label>
                                <textarea type="text" id="textarea"></textarea>
                            </div>
                            <div class="airtime-cta">
                                <button type="button" class="pay-btn w-100 py-3">Add Room</button>
                            </div>
                        </form>
                    </div>
                    <div class="add-new-right">
                        <div id="addRoom" class="new-right-image">
                            <img src="./assets/image/6.webp" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                            <path stroke-linecap="round" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2" />
                                                            <path stroke-linecap="round" d="m2 12.5l1.752-1.533a2.3 2.3 0 0 1 3.14.105l4.29 4.29a2 2 0 0 0 2.564.222l.299-.21a3 3 0 0 1 3.731.225L21 18.5" opacity="0.5" />
                                                            <path d="m18.562 2.935l.417-.417a1.77 1.77 0 0 1 2.503 2.503l-.417.417m-2.503-2.503s.052.887.834 1.669s1.669.834 1.669.834m-2.503-2.503L14.727 6.77c-.26.26-.39.39-.5.533a3 3 0 0 0-.338.545c-.078.164-.136.338-.252.686l-.372 1.116m7.8-4.212L17.23 9.273c-.26.26-.39.39-.533.5a3 3 0 0 1-.545.338c-.164.078-.338.136-.686.252l-1.116.372m0 0l-.722.24a.477.477 0 0 1-.604-.603l.241-.722m1.085 1.085L13.265 9.65" />
                                                        </g>
                                                    </svg>
                        </div>
                        <label>Upload Room</label>
                        <input id="roomFile" type="file">
                    </div>
                </div>
            </section>
            
                
            </div>

            <?php 
                require_once('./footer.php');
            ?>
    <!-- ============================================== end of dash body ==================================================== -->

        </div>
    </div>
 </section>
<!-- =============================================== emd of dashboard overview section =========================================== -->
<?php 
    require_once('./script.php');
?>
<script>
        tinymce.init({
                selector: "#textarea",
                height: 300,
                backgroundColor: "#fff",
                content_style: "body { background-color: #fff; color: #000; }",
                plugins: "link lists code",
                toolbar:
                  "undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link | code",
              });
    </script>
    
       
</body>
</html>