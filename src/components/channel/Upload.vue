<template>
	<div class="fileDiv">
    <form enctype="multipart/form-data">
		<label for="file" class="btn">Select Video</label>
		<input
			id="file"
			style="visibility: hidden"
			type="file"
			accept="video/*"
			@change="handleFileUpload($event)"
		/>
    </form>
	</div>
	<button class="php" @click="php()">PHP</button>

	<img :src="img" />

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
				// console.log(this.video);
				reader.addEventListener("load", function () {
					video.src = reader.result;
				});
			},

			handleFileUpload(event) {
				this.file = event.target.files[0];
				this.previewVideo();
			},
			submitFile() {
				console.log("Submiting ...");
        //console.log(this.video);
				let reader = new FileReader();
        const vid = this.video
        reader.readAsBinaryString( vid ); 

        reader.onloadend = function () {
					let formData = new FormData();
          console.log(reader.result);
          formData.append("file", reader.result);
          
          axios
                  .post("/api/api.php",{
                    data: {
                      data: reader.result.toString(),
                    }
                  })
                  .then(function(response){
                    console.log(response)
                      console.log('succes')
                  })
                  .catch(function(error){
                    console.log(error)
                  })
        }
			},



			php() {
				axios
					.get("api/api.php")
					.then((result) => {
						console.log(result.data.split('"')[1]);
						this.img =
							"data:image/jpeg;base64," + btoa(result.data.split('"')[1]);
						console.log(this.img);
					})
					.catch((err) => {
						console.log(err);
					});
			},
		},
	};
</script>
