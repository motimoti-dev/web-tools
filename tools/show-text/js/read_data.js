window.addEventListener("DOMContentLoaded", (e) => {
    if(window.File){
        const loaded_data = document.getElementById("file-load");
        const drop_data = document.getElementById("drop-box");
        const text_data = document.getElementById("text-content");
        var reader = new FileReader();

        drop_data.addEventListener("dragover", (event) => {
            event.preventDefault();
            drop_data.classList.add("active");
        });
        
        drop_data.addEventListener("dragleave", (event) => {
            event.preventDefault();
            drop_data.classList.remove("active");
        });

        drop_data.addEventListener("drop", (event) => {
            event.preventDefault();
            drop_data.classList.remove("active");
        
            var droped_data = event.dataTransfer.files;
            loaded_data.files = droped_data;

            reader.onload = (event) => {
                text_data.value = event.target.result;
            };
            reader.readAsText(droped_data[0]);
        });

        loaded_data.addEventListener("change", (event) => {
            var input_data = event.target.files[0];

            reader.onload = (event) => {
                text_data.value = event.target.result;
            };
            reader.readAsText(input_data);
        }, false);
    } else {
        alert("FileAPIが実装されていません");
    }
});