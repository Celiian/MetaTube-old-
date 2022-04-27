<template>
    <div class="wrapper--register">
        <form class="form--register" @submit="checkForm">
            <h2>Please fill the form to create an account :</h2>

            <label for="firstname">First Name</label>
            <input
                v-model="firstname"
                class="input--register"
                type="text"
                placeholder="First Name"
                id="firstname"
            />
            <p id="errorfirstname" class="error--register"></p>
            <label for="lastname">Last Name</label>
            <input
                v-model="lastname"
                class="input--register"
                type="text"
                placeholder="Last Name"
                id="lastname"
            />
            <p id="errorlastname" class="error--register"></p>
            <label for="dateofbirthday">Date of Birthday</label>
            <input
                v-model="dateofbirthday"
                class="input--register"
                type="date"
                id="dateofbirthday"
            />
            <p id="errordate" class="error--register"></p>
            <label for="email">Address Email</label>
            <input
                v-model="email"
                class="input--register"
                type="text"
                placeholder="Address Email"
                id="email"
            />
            <p id="erroremail" class="error--register"></p>
            <label for="password">Password</label>
            <input
                v-model="password"
                class="input--register"
                type="password"
                placeholder="Password"
                id="password"
            />
            <p id="errorpassword" class="error--register"></p>
            <label for="confirm-passord">Confirm Password</label>
            <input
                v-model="confirmpassord"
                class="input--register"
                type="password"
                placeholder="Confirm Password"
                id="confirm-password"
            />
            <p id="errorconfirm" class="error--register"></p>
            <button class="btn--register">Register</button>
            <router-link to="/login">I have an account</router-link>
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
            firstname: null,
            lastname: null,
            dateofbirthday: null,
            email: null,
            password: null,
            confirmpassord: null,
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
            this.errors = [];
            const errorfirst = document.getElementById("errorfirstname");
            const errorlastname = document.getElementById("errorlastname");
            const errordate = document.getElementById("errordate");
            const erroremail = document.getElementById("erroremail");
            const errorpassword = document.getElementById("errorpassword");
            const errorconfirm = document.getElementById("errorconfirm");
            // Check if the firstname is not empty and length <= 50
            if (!this.firstname || this.firstname.length > 50) {
                errorfirst.textContent = "Please enter a valid First Name";
                this.errors.push("Erreur");
            } else {
                errorfirst.textContent = "";
            }
            // Check if the lastname is not empty and length <= 50
            if (!this.lastname || this.lastname.length > 50) {
                errorlastname.textContent = "Please enter a valid Last Name";
                this.errors.push("Erreur");
            } else {
                errorlastname.textContent = "";
            }
            // Check if the date of birthday is not empty
            if (!this.dateofbirthday) {
                errordate.textContent = "Please put a valid date of birth.";
                this.errors.push("Erreur");
            } else {
                const test = this.dateofbirthday.split("-");
                const year = test[0];
                const month = test[1];
                const day = test[2];
                console.log(day);
                console.log(month);
                console.log(year);
                errordate.textContent = "";
            }

            // Check if the email is not empty and match the email pattern
            const re =
                /(^$|^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$)/;
            if (!this.email || !re.test(this.email)) {
                erroremail.textContent =
                    "The email can not be empty and must be a valid email !";
                this.errors.push("Erreur");
            } else {
                erroremail.textContent = "";
            }
            // Check if password is not empty and length 8 => password <= 25
            if (
                !this.password ||
                (this.password.length <= 8 && this.password.length <= 25)
            ) {
                errorpassword.textContent = "Please put a valid password.";
                this.errors.push("Erreur");
            } else {
                errorpassword.textContent = "";
            }
            if (!this.confirmpassord || this.confirmpassord != this.password) {
                errorconfirm.textContent =
                    "The password is not the same. Try Again";
                this.errors.push("Erreur");
            } else {
                errorconfirm.textContent = "";
            }

            if (!this.errors.length) {
                return true;
            }

            e.preventDefault();
        },
    },
});
</script>
<style>
@import "../../src/style/register.css";
</style>
