$(function(){
    fetch('https://api.motisan.info/data.php')
    .then(function (response){
        return response.text();
    })
    .then(function (data) {
        //console.log(data);
        var obj_json = JSON.parse(data);
        for(i in obj_json){
            var html_code = obj_json[i].html.replaceAll('<', '&lt;').replaceAll('>', '&gt;');
            let dom = `\
            <div class="data-box">\n\
                <div class="sentence-area">\n\
                    <div class="data-title">\n\
                        <h2>${obj_json[i].title}</h2>\n\
                    </div>\n\
                    <div class="data-description">\n\
                        <p>${obj_json[i].description}</p>\n\
                    </div>\n\
                </div>\n\
                <div class="main-content">\n\
                    <div class="show-area">\n\
                        <span>sample</span>\n\
                    </div>\n\
                    <div class="code-area">\n\
                        <div class="tab-area">\n\
                            <button class="tab-btn btn-active">HTML</button>\n\
                            <button class="tab-btn">CSS</button>\n\
                            <button class="copy-button right-obj"><img class="copy-icon" src="img/content_copy_FILL0_wght400_GRAD0_opsz48.png" alt="content-copy"></button>\n\
                        </div>\n\
                        <div class="tab-content">\n\
                            <div class="tab-data active">\n\
                                <pre><code>${html_code}</code></pre>\n\
                            </div>\n\
                            <div class="tab-data">\n\
                                <pre><code>${obj_json[i].css}</code></pre>\n\
                            </div>\n\
                        </div>\n\
                    </div>\n\
                </div>\n\
            </div>\n\
            `;
            $(".main-container").append(dom);
        }
    });
});