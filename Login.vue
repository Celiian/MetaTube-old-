<template>
    <div class="wrapper--register">
        <form class="form--register" @submit="checkForm">
            <h2>Please fill the form to connect:</h2>
            <label for="username">Adress Email</label>
            <input
                v-model="emaillogin"
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="mailLogin"
            />
            <p id="erroremail" class="error--register"></p>
            <label for="password">Password</label>
            <input
                v-model="passwordlogin"
                class="input--register"
                type="password"
                placeholder="Password"
                id="passwordLogin"
            />
            <p id="errorpasslog" class="error--register"></p>
            <button class="btn--register">Login</button>
            <br />
            <router-link to="/register">I don't have any account </router-link>
        </form>
    </div>
</template>
<script>
import { defineComponent } from "vue";
import { useI18n } from "vue-i18n";
export default defineComponent({
    name: "HelloI18n",
    data() {
        return {
            errors: [],
            emaillogin: null,
            passwordlogin: null,
        };
    },
    setup() {
        const { t } = useI18n({
            inheritLocale: true,
            useScope: "local",
        });

        return { t };
    },

    methods: {
        checkForm: function (e) {
            // Clear errors
            this.errorsLog = [];
            const errorpasslog = document.getElementById("errorpasslog");
            const erroremail = document.getElementById("erroremail");

            // Check if password is not empty and length 8 => password <= 25
            if (
                !this.password ||
                (this.password.length <= 8 && this.password.length <= 25)
            ) {
                errorpasslog.textContent = "Please put a valid password.";
                this.errorsLog.push("Erreur");
            } else {
                errorpasslog.textContent = "";
            }

            // Check if the email is not empty and match the email pattern
            const re =
                /(^$|^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$)/;
            if (!this.emaillogin || !re.test(this.emaillogin)) {
                erroremail.textContent =
                    "The email can not be empty and must be a valid email !";
                this.errorsLog.push("Erreur");
            } else {
                erroremail.textContent = "";
            }

            if (!this.errorsLog.length) {
                return true;
            }

            e.preventDefault();
        },
    },
});
</script>
