
<!-- ============================================= edit modal section ==================================================== -->
 <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div class="edit-profile mb-4">
            <div id="image" class="edit-profile-left">
                <img src="./assets/image/20250311_152604.jpg" alt="">
            </div>
            <div class="edit-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2" />
                        <path stroke-linecap="round" d="m2 12.5l1.752-1.533a2.3 2.3 0 0 1 3.14.105l4.29 4.29a2 2 0 0 0 2.564.222l.299-.21a3 3 0 0 1 3.731.225L21 18.5" opacity="0.5" />
                        <path d="m18.562 2.935l.417-.417a1.77 1.77 0 0 1 2.503 2.503l-.417.417m-2.503-2.503s.052.887.834 1.669s1.669.834 1.669.834m-2.503-2.503L14.727 6.77c-.26.26-.39.39-.5.533a3 3 0 0 0-.338.545c-.078.164-.136.338-.252.686l-.372 1.116m7.8-4.212L17.23 9.273c-.26.26-.39.39-.533.5a3 3 0 0 1-.545.338c-.164.078-.338.136-.686.252l-1.116.372m0 0l-.722.24a.477.477 0 0 1-.604-.603l.241-.722m1.085 1.085L13.265 9.65" />
                    </g>
                </svg>
            </div>
            <input id="file-input" type="file">
        </div>

        <!-- edit input section  -->
            <form action="">
                <div class="all-edit-input">
                    <div class="edit-input-content">
                        <label for="first name">First Name</label>
                        <input type="text" value="John">
                    </div>
                        <div class="edit-input-content">
                            <label for="last name">Last Name</label>
                            <input type="text" value="Thompson">
                        </div>
                </div>
                <div class="all-edit-input">
                    <div class="edit-input-content">
                        <label for="email">Email</label>
                        <input type="email" value="agwujohnama@gmail.com">
                    </div>
                        <div class="edit-input-content">
                            <label for="country">Country</label>
                            <select name="" id="" >
                                <option value="">Nigeria</option>
                            </select>
                        </div>
                </div>
                <div class="all-edit-input">
                    <div class="edit-input-content">
                        <label for="course">Phone Number</label>
                        <input type="text" value="+234-81077-23129">
                    </div>
                        <div class="edit-input-content">
                            <label for="certificate">Address</label>
                            <input type="text" value="Grace villa, Ebonyi State.">
                        </div>
                </div>
                <div class="save-cta mb-3">
                    <button type="button" class="main-btn-2 w-25">Save Changes</button>
                </div>
            </form>
        <!-- end of edit input section  -->

      </div>
     
    </div>
  </div>
</div>
<!-- ============================================= end of edit modal section ==================================================== -->