<template>
    <div class="wrapper--register">
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form>
            <h3>Login Here</h3>
            <div id="img-preview"></div>
            <input
                type="file"
                id="choose-file"
                name="choose-file"
                accept="image/*"
            />
            <label for="choose-file">Choose File</label>
            <label for="firstname">First Name</label>
            <input type="text" placeholder="First Name" id="firstname" />

            <label for="lastname">Last Name</label>
            <input type="text" placeholder="Last Name" id="lastname" />

            <label for="dateofbirthday">Date of Birthday</label>
            <input type="date" id="dateofbirthday" />

            <label for="username">Username</label>
            <input type="text" placeholder="Address Email" id="username" />

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" />

            <label for="password">Confirm Password</label>
            <input
                type="password"
                placeholder="Confirm Password"
                id="password"
            />

            <button>Log In</button>
        </form>
    </div>
</template>
<script>
const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview.style.display = "block";
      imgPreview.innerHTML = '<img src="' + this.result + '" />';
    });    
  }
}
</script>
<style>
#img-preview {
    display: none;
    width: 155px;
    border: 2px dashed #333;
    margin-bottom: 20px;
}
#img-preview img {
    width: 100%;
    height: auto;
    display: block;
}
[type="file"] {
    height: 0;
    width: 0;
    overflow: hidden;
}
[type="file"] + label {
    font-family: sans-serif;
    background: #f09819;
    padding: 10px 30px;
    border: 2px solid #f09819;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s;
}
[type="file"] + label:hover {
    background-color: #23a2f6;
    color: #fff;
    border: 2px solid #23a2f6;
}
.wrapper--register {
    overflow: scroll;
    height: 1000px;
    position: relative;
}
:root {
    --primary-color: rgb(185, 15, 15);
    --secondary-color: rgb(158, 12, 12);

    --dark-theme: rgb(22, 22, 22);
    --dark-text: rgb(255, 255, 255);

    --bright-theme: rgb(255, 255, 255);
    --bright-text: rgb(20, 20, 20);

    --font: "Roboto", sans-serif;
    --font-small: 0.8rem;
    --font-medium: 1rem;
    --font-large: 2rem;
    --font-Xlarge: 4rem;
}

*,
*:before,
:after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    background-color: var(--dark-theme);
}
.background {
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
}
.background .shape {
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child {
    background: linear-gradient(#1845ad, #23a2f6);
    left: -80px;
    top: -80px;
}
.shape:last-child {
    background: linear-gradient(to right, #ff512f, #f09819);
    right: -30px;
    bottom: -80px;
}
form {
    width: 400px;
    background-color: rgba(255, 255, 255, 0.13);
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    padding: 50px 35px;
}
form {
    font-family: "Poppins", sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label {
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input {
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder {
    color: #e5e5e5;
}
button {
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social {
    margin-top: 30px;
    display: flex;
}
.social div {
    background: red;
    width: 150px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgba(255, 255, 255, 0.27);
    color: #eaf0fb;
    text-align: center;
}
.social div:hover {
    background-color: rgba(255, 255, 255, 0.47);
}
.social .fb {
    margin-left: 25px;
}
.social i {
    margin-right: 4px;
}
</style>
