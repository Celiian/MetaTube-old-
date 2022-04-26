<template>
    <div class="wrapper--register">
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
       
        <form class="form--register">
             <h2>Please fill the form to create an account :</h2>
            <label for="firstname">First Name</label>
            <input
                class="input--register"
                type="text"
                placeholder="First Name"
                id="firstname"
            />

            <label for="lastname">Last Name</label>
            <input
                class="input--register"
                type="text"
                placeholder="Last Name"
                id="lastname"
            />

            <label for="dateofbirthday">Date of Birthday</label>
            <input class="input--register" type="date" id="dateofbirthday" />

            <label for="username">Username</label>
            <input
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="username"
            />

            <label for="password">Password</label>
            <input
                class="input--register"
                type="password"
                placeholder="Password"
                id="password"
            />

            <label for="password">Confirm Password</label>
            <input
                class="input--register"
                type="password"
                placeholder="Confirm Password"
                id="confirm-password"
            />

            <button class="btn--register">Register</button>
            <router-link to="/login">I have an account</router-link>
        </form>
    </div>
</template>
<script></script>
<style>
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
.wrapper--register {
    overflow: scroll;
    height: 1400px;
    position: relative;
}
.background {
    width: 50%;
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
.shape:hover {
    width: 300px;
    height: 300px;
    transform: rotate(360deg);
}
.shape:last-child {
    background: linear-gradient(to right, #ff512f, #f09819);
    right: -30px;
    bottom: -80px;
}
.form--register {
    width: 35%;
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
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
.form--register h3 {
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
.input--register {
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
.btn--register {
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
</style>
