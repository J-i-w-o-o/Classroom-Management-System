<?php
  require('includes/Header.php');
?>

  <link rel="stylesheet" href="../main-css/profile.css">

  <div class="x--main-container">
    <div class="container-fluid">
    <div class="row">

      <div class="col-4 bg-light pt-4 pb-5">
        
        <div class="upload text-center">
          <img src="../img/userIconImage.jpg" width = 230 height = 230 class="picture mb-3 img-thumbnail">
            <?php
                if (isset($_GET['error'])){ ?>
                
                  <div class="alert alert-danger" role="alert">
                    
                <?=$_GET['error']?>
                </div>
                  <?php } ?>
        <div class="round">
        <i class="fa-regular fa-camera" style="color: #fff"></i>
            <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="upload">Upload</button>
            </form>
        </div>
        
      </div>
      <div class="d-flex flex-row align-items-center mb-1">
      <input type="text" readonly class="form-control-plaintext text-center" id="staticSchoolIdNumber" value="20200114-M">
      <input type="text" readonly class="form-control-plaintext text-center" id="staticName" value="John Doe">
      </div>
      <input type="text" readonly class="form-control-plaintext text-center" id="staticAddress" value="4321 Sampaloc St. Corner Olda St. Mesa Manila">
      <div class="d-flex flex-row align-items-center mb-1">
      <input type="text" readonly class="form-control-plaintext text-center" id="staticBirthdate" value="December 25, 2001 ">
      <input type="text" readonly class="form-control-plaintext text-center" id="staticContactNumber" value="0929 555 1328">
      </div>

      <!-- // GMAIL Account -->
      <div class="input-group mx-auto">
        <div class="input-group-prepend">
          <span class="input-group-text text-wrap" id="gmailAccount">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 24" width="23" height="23"><path d="M29.986 27.715H2.008C.915 27.715 0 26.85 0 25.733V6.376A2.01 2.01 0 0 1 2.008 4.37h27.978c1.093 0 2.008.9 2.008 2.008v19.33c-.025 1.144-.915 2.008-2.008 2.008z" fill="#f2f2f2"/><path d="M4 27.715l11.97-8.76.076-.508L3.7 9.578l-.025 17.705z" opacity=".1" fill="#221f1f"/><g fill="#d44c3d"><path d="M2.008 27.715C.9 27.715 0 26.85 0 25.733V6.35c0-1.118.9-1.32 2.008-1.32s2.008.23 2.008 1.32v21.364z"/><path d="M2.008 5.334c1.423 0 1.703.432 1.703 1.016v21.084H2.008c-.94 0-1.703-.762-1.703-1.703V6.35c-.025-.6.28-1.016 1.703-1.016zm0-.28C.9 5.055 0 5.283 0 6.35v19.356a1.98 1.98 0 0 0 2.008 2.008h2.008V6.35C4 5.258 3.126 5.055 2.008 5.055zm27.978.28c1.296 0 1.703.254 1.703.966v19.458c0 .94-.762 1.703-1.703 1.703h-1.703V6.3c-.025-.737.407-.966 1.703-.966zm0-.28c-1.118 0-2.008.152-2.008 1.245v21.44h2.008c1.118 0 2.008-.9 2.008-2.008V6.274c-.025-1.093-.915-1.22-2.008-1.22z"/><path d="M29.986 27.715h-2.008V6.3c0-1.118.9-1.245 2.008-1.245s2.008.152 2.008 1.245v19.458a2 2 0 0 1-2.008 1.957z"/></g><path d="M21.422 27.715L.178 7.2l1.118.457 14.8 10.647L31.993 6.63v19.128a1.99 1.99 0 0 1-2.008 1.982z" opacity=".08" fill="#221f1f"/><g fill="#d44c3d"><path d="M15.96 18.98L.864 8.028c-.9-.66-1.144-1.93-.483-2.82s1.93-1.093 2.846-.432l12.757 9.275L28.817 4.65c.9-.66 2.135-.457 2.795.457.66.9.457 2.135-.457 2.795z"/><path d="M29.986 4.572c.534 0 1.067.254 1.398.712.534.762.38 1.83-.38 2.4L15.96 18.625 1.042 7.8C.28 7.24.076 6.147.6 5.4c.305-.457.84-.737 1.423-.737.38 0 .737.102 1.016.33l12.73 9.25.178.102.178-.102 12.82-9.393c.33-.178.66-.28 1.042-.28zm0-.305c-.407 0-.84.102-1.17.38L15.984 14.05 3.202 4.75c-.33-.254-.762-.38-1.194-.38-.635.025-1.27.305-1.652.84-.635.9-.38 2.135.508 2.795L15.96 18.98 31.155 7.9a2.02 2.02 0 0 0 .457-2.795c-.407-.534-1.016-.84-1.626-.84z"/></g></svg>
          </span>
        </div>
        <input type="text" class="form-control text-center" value="20200113m.doe.john.bscs@gmail.com">
      </div>

      <div class="editSocialMedia text-center">
      <button type="button" class="btn btn-success mt-4 mb-3">
        <i class="fa fa-edit" aria-hidden="true"></i>
      Edit Social Media
      </button>
      </div>
      
      <!-- // Facebook Account -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-center" id="facebookUsernameLink" style="color: #4267B2">
            <i class="fa-brands fa-square-facebook fs-4" style="width: 23px"></i>
          </span>
        </div>
        <input type="text" class="form-control" value="https://www.facebook.com/eunbunnyyy/">
      </div>

      <!-- // Twitter Account -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-center" id="twitterUsernameLink" style="color: #1D9BF0">
          <i class="fa-brands fa-twitter fs-4" style="width: 23px"></i>
          </span>
        </div>
        <input type="text" class="form-control" value="https://twitter.com/elonmusk">
      </div>

      <!-- // Instagram Account -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-center" id="instagramUsernameEmail">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 140" width="23px" height="23px" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="b"><stop offset="0" stop-color="#3771c8"/><stop stop-color="#3771c8" offset=".128"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></linearGradient><radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"/><radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"/></defs><path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"/><path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"/></svg>
          </span>
        </div>
        <input type="text" class="form-control" value="https://www.instagram.com/eunbining0904/">
      </div><br>

    </div>
        
        <div class="col-8 bg-light ">

          <div class="yearCourseSemester">
            
            <div class="text text-start fs-4 fw-bold mt-3 mb-1  mx-3">
            Year - Course - Section - Semester
            </div>

            <div class="d-flex justify-content-start">

            <div class="buttonsYear">
              <div class="btn-group">

                <button type="button" class="btn btn-primary dropdown-toggle mx-3" data-toggle='dropdown' aria-expanded="false">
                  1st Year
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">1st Year</a></li>
                  <li><a class="dropdown-item" href="#">2nd Year</a></li>
                  <li><a class="dropdown-item" href="#">3rd Year</a></li>
                  <li><a class="dropdown-item" href="#">4th Year</a></li>
                </ul>

              </div>
            </div>
            
            <div class="buttonsCourse">
            <div class="btn-group">

                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle='dropdown' aria-expanded="false">
                  Course
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bachelor of Science in Computer Science</a></li>
                  <li><a class="dropdown-item" href="#">Bachelor of Science in Information System</a></li>
                  <li><a class="dropdown-item" href="#">Bachelor of Science in Information Technology</a></li>
                  <li><a class="dropdown-item" href="#">Bachelor of Science in Entertainment and Multimedia Computing</a></li>
                </ul>

              </div>
            </div>

            <div class="buttonsSemester">
              <div class="btn-group">

                <button type="button" class="btn btn-primary dropdown-toggle mx-3 mb-3" data-toggle='dropdown' aria-expanded="false">
                  Semester
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">1st Semester</a></li>
                  <li><a class="dropdown-item" href="#">2nd Semester</a></li>
                  <li><a class="dropdown-item" href="#">Summer Class</a></li>
                </ul>

              </div>
            </div>
          </div>

          <div class="subjectEnrolled mx-3 mb-3">
              <span class="subjectEnrolledText fw-bold fs-4">Subjects Enrolled</span>

              <ul class="list-group list-group-flush-numbered mt-2">
                <li class="list-group-item">PE 004 Team Sports</li>
                <li class="list-group-item">CCS 116 Advanced Web Systems</li>
                <li class="list-group-item">GEC 008 Ethics</li>
                <li class="list-group-item">RES 001 Methods of Research</li>
                <li class="list-group-item">CS 108 Software Engineering 1</li>
                <li class="list-group-item">CS 110 Networks and Communications</li>
                <li class="list-group-item">GEC 007 Science, Technology, and Society</li>
                <li class="list-group-item">CSE 102 Graphics and Visual Computing</li>
              </ul>

            </div>
            
            <div class="pendingTasks mx-3">

            <span class="pendingTasksText fw-bold fs-4">Pending Tasks</span>

            <ul class="list-group list-group-flush-numbered mt-2">
                <li class="list-group-item">None</li>
                <li class="list-group-item">None</li>
                <li class="list-group-item">None</li>
              </ul>

            </div>

          </div>
        </div>

      
      </div>
    </div>
  </div>

<?php
require('includes/Footer.php');
?>



    
 