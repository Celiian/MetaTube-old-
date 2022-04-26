<template>
    <nav class="wrapper--navbar">
        <div class="box--navbar">
            <div class="navbar--side">
                <svg
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    stroke="currentColor"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="navbar--logo"
                >
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <button class="btn--logo--nav">
                    <router-link to="/">Home</router-link>
                </button>
            </div>
            <div class="navbar--center">
                <input
                    type="text"
                    class="navbar__center__input"
                    placeholder="Search"
                />
                <button class="navbar__center__search-btn">
                    <svg
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        stroke="currentColor"
                        stroke-width="2"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="navbar--logo"
                    >
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>

            <div class="navbar--side">
                <svg
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    stroke="currentColor"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="navbar--logo"
                >
                    <polygon points="23 7 16 12 23 17 23 7"></polygon>
                    <rect
                        x="1"
                        y="5"
                        width="15"
                        height="14"
                        rx="2"
                        ry="2"
                    ></rect>
                </svg>
                <svg
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    stroke="currentColor"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="navbar--logo"
                >
                    <path
                        d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"
                    ></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <div class="btn--navbar--register">
                    <router-link to="/login">Login</router-link>
                </div>
              
            </div>
        </div>
    </nav>
</template>
<script>
export default {
  data() {
    return {
      message: 'Hello World!'
    }
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.btn--navbar--register{
  border:1px solid var(--dark-text);
  padding: 5px;
  background: #858585;
}
a {
    text-decoration: none;
    color: var(--dark-text);
}
.btn--logo--nav {
    width: 50%;
    background: none;
    border: none;
}
.box--navbar {
    width: 100%;
    max-width: 1700px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
}
.navbar--logo {
    color: var(--dark-text);
}
.wrapper--navbar {
    background-color: #202020;
    padding: 12px 10px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 300;
}
.navbar--side {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    align-items: center;
    width: 20%;
}
.navbar--center {
    display: flex;
    width: 60%;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
}

.navbar__center__input {
    background: #121212;
    width: 70%;
    max-width: 600px;
    border: 1px solid #313131;
    padding: 6px;
    margin: 0;
    outline: none;
    color: #858585;
    font-size: 1em;
}
.navbar__center__input::placeholder {
    color: #858585;
    padding-left: 0.2em;
}
.navbar__center__input:focus {
    border: 1px solid #2da0ff;
}
.navbar__center__search-btn {
    padding: 6px 30px;
    background: #313131;
    color: #858585;
    border: none;
    margin: 0;
    max-width: 20%;
}

.profil--connect--user {
    border-radius: 50%;
}
</style>
