<template>
    <div class="wrapper--register">
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form class="form--register">
             <h2>Please fill the form to connect:</h2>
            <label for="username">Adress Email</label>
            <input
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="mailLogin"
            />

            <label for="password">Password</label>
            <input
                class="input--register"
                type="password"
                placeholder="Password"
                id="passwordLogin"
            />

            <button class="btn--register">Login</button>
            <br />
            <router-link to="/register">I don't have any account </router-link>
        </form>
    </div>
</template>
