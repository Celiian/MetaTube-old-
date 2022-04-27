<template>
	<div id="feature-channel-app">
		<button id="feature-channel-upload" @click="launchOpen()">Upload</button>
		<div class="feature-channel-pop">
			<div class="feature-channel-pop-zone" v-if="(showModal = true)">
				<input
					type="file"
					accept="video/*"
					@change="handleFileUpload($event)"
				/>
			</div>
			<button @click="php()">PHP</button>
		</div>
	</div>

  <img :src="img">

	<div class="feature-channel-videoplayer">
		<h1>{{ t("global.title") }}</h1>
		<video class="vid" id="video-preview" controls v-show="file != ''" />
		<button v-on:click="submitFile()">Submit video</button>
	</div>
</template>

<script>
	import "./Upload.css";
	import "../../style/global.css";
	import { useI18n } from "vue-i18n";
	import { ref } from "vue";
	import axios from "axios";

	new ref({
		el: "#feature-channel-app",
		data: {
			showModal: null,
		},
	});

	export default {
		name: "App",
		setup() {
      const img = ref(null);
			const video = FileList;
			const { t } = useI18n({
				inheritLocale: true,
				useScope: "local",
			});
			return {
        img,
				video,
				t,
			};
		},
		methods: {
			previewVideo() {
				let video = document.getElementById("video-preview");

				let reader = new FileReader();

				reader.readAsDataURL(this.file);
				this.video = this.file;
				console.log(this.video);
				reader.addEventListener("load", function () {
					video.src = reader.result;
				});
			},

			handleFileUpload(event) {
				this.file = event.target.files[0];
				this.previewVideo();
			},
			submitFile() {
				let reader = new FileReader();
				reader.readAsArrayBuffer(this.file);
				reader.addEventListener("load", function () {});
				let formData = new FormData();
				formData.append("file", this.video.stream());
				axios
					.post("/api/api.php", formData, {})
					.then(function (response) {
						console.log(response);
					})
					.catch(function () {
						console.log("FAILURE!!");
					});
			},

			php() {
				axios
					.get("api/api.php")
					.then((result) => {
            console.log(result.data.split('"')[1])
            this.img = 'data:image/jpeg;base64,' + btoa(result.data.split('"')[1]);
            console.log(this.img)
					})
					.catch((err) => {
						console.log(err);
					});
			},
		},
	};
</script>
