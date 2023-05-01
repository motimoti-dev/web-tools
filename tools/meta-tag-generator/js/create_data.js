window.addEventListener("DOMContentLoaded", (event) => {
    // charset
    const charset_trigger = document.getElementsByClassName("charset-elem");
    const char_code = document.getElementById("char-code");
    const charset_out = document.getElementById("charset-output");
    for(let i = 0; i < charset_trigger.length; i++){
        charset_trigger[i].addEventListener("change", () => {
            charset_out.textContent = `<meta charset="${char_code.value}">`
            createCode();
        });
    }

    // description
    const description_trigger = document.getElementsByClassName("description-elem");
    const description_sentence = document.getElementById("description-sentence");
    const description_out = document.getElementById("description-output");
    for(let i = 0; i < description_trigger.length; i++){
        description_trigger[i].addEventListener("input", () => {
            description_out.textContent = `<meta name="description" content="${description_sentence.value}">`
            createCode();
        });
    }

    // viewport
    const viewport_trigger = document.getElementsByClassName("viewport-elem");
    const viewport_width = document.getElementById("viewport-width");
    const viewport_initial_scale = document.getElementById("viewport-initial-scale");
    const viewport_user_scalable = document.getElementById("viewport-user-scalable");
    const viewport_out = document.getElementById("viewport-output");
    for(let i = 0; i < viewport_trigger.length; i++){
        viewport_trigger[i].addEventListener("change", () => {
            viewport_out.textContent = `<meta name="viewport" content="width=${viewport_width.value}, initial-scale=${viewport_initial_scale.value}, user-scalable=${viewport_user_scalable.value}">`
            createCode();
        });
    }

    // theme-color
    const theme_color_trigger = document.getElementsByClassName("theme-color-elem");
    const theme_color_picker = document.getElementById("theme-color-picker");
    const theme_color_result = document.getElementById("theme-color-result");
    const theme_color_out = document.getElementById("theme-color-output");
    for(let i = 0; i < theme_color_trigger.length; i++){
        theme_color_trigger[i].addEventListener("change", () => {
            theme_color_out.textContent = `<meta name="theme-color" content="${theme_color_picker.value}">`
            theme_color_result.textContent = `選択:${theme_color_picker.value}`;
            createCode();
        });
    }

    // og
    const og_trigger = document.getElementsByClassName("og-elem");
    const og_out = document.getElementById("og-output");

    const og_site_name_flag = document.getElementById("og-site-name-flag");
    const og_site_name_sentence = document.getElementById("og-site-name-sentence");
    const og_url_flag = document.getElementById("og-url-flag");
    const og_url_sentence = document.getElementById("og-url-sentence");
    const og_type_flag = document.getElementById("og-type-flag");
    const og_type_sentence = document.getElementById("og-type-sentence");
    const og_title_flag = document.getElementById("og-title-flag");
    const og_title_sentence = document.getElementById("og-title-sentence");
    const og_description_flag = document.getElementById("og-description-flag");
    const og_description_sentence = document.getElementById("og-description-sentence");
    const og_image_flag = document.getElementById("og-image-flag");
    const og_image_sentence = document.getElementById("og-image-sentence");
    
    const og_child_trigger = document.getElementsByClassName("og-child-trigger");

    for(let i = 0; i < og_child_trigger.length; i++){
        og_child_trigger[i].addEventListener("change", createOgCode);
    }
    for(let i = 0; i < og_trigger.length; i++){
        og_trigger[i].addEventListener("input", () => {
            createOgCode();
        });
    }

    function createOgCode(){
        let total_og_code = "";
        if(og_site_name_flag.checked){
            total_og_code += `<meta property="og:site_name" content="${og_site_name_sentence.value}">\n`;
        }
        if(og_url_flag.checked){
            total_og_code += `<meta property="og:url" content="${og_url_sentence.value}">\n`;
        }
        if(og_type_flag.checked){
            total_og_code += `<meta property="og:type" content="${og_type_sentence.value}">\n`;
        }
        if(og_title_flag.checked){
            total_og_code += `<meta property="og:title" content="${og_title_sentence.value}">\n`;
        }
        if(og_description_flag.checked){
            total_og_code += `<meta property="og:description" content="${og_description_sentence.value}">\n`;
        }
        if(og_image_flag.checked){
            total_og_code += `<meta property="og:image" content="${og_image_sentence.value}">\n`;
        }
        og_out.textContent = total_og_code
        createCode();
    }

    // robots
    const robots_trigger = document.getElementsByClassName("robots-elem");
    const robots_directive = document.getElementById("robots-directive");
    const robots_out = document.getElementById("robots-output");
    for(let i = 0; i < robots_trigger.length; i++){
        robots_trigger[i].addEventListener("change", () => {
            robots_out.textContent = `<meta name="robots" content="${robots_directive.value}">`
            createCode();
        });
    }

    // keywords
    const keywords_trigger = document.getElementsByClassName("keywords-elem");
    const keywords_sentence = document.getElementById("keywords-sentence");
    const keywords_out = document.getElementById("keywords-output");
    for(let i = 0; i < keywords_trigger.length; i++){
        keywords_trigger[i].addEventListener("input", () => {
            keywords_out.textContent = `<meta name="keywords" content="${keywords_sentence.value}">`
            createCode();
        });
    }


    // checkbox
    const checkbox_trigger = document.getElementsByClassName("checkbox-trigger");
    for(let i = 0; i < checkbox_trigger.length; i++){
        checkbox_trigger[i].addEventListener("change", createCode);
    }

    // total
    const charset_flag = document.getElementById("charset-flag");
    const description_flag = document.getElementById("description-flag");
    const viewport_flag = document.getElementById("viewport-flag");
    const theme_color_flag = document.getElementById("theme-color-flag");
    const og_flag = document.getElementById("og-flag");
    const robots_flag = document.getElementById("robots-flag");
    const keywords_flag = document.getElementById("keywords-flag");
    const total_output = document.getElementById("total-output");
    function createCode(){
        let total_code = "";
        if(charset_flag.checked){
            total_code += `${charset_out.textContent}\n`;
        }
        if(description_flag.checked){
            total_code += `${description_out.textContent}\n`;
        }
        if(viewport_flag.checked){
            total_code += `${viewport_out.textContent}\n`;
        }
        if(theme_color_flag.checked){
            total_code += `${theme_color_out.textContent}\n`;
        }
        if(og_flag.checked){
            total_code += `${og_out.textContent}`;
        }
        if(robots_flag.checked){
            total_code += `${robots_out.textContent}\n`;
        }
        if(keywords_flag.checked){
            total_code += `${keywords_out.textContent}\n`;
        }
        total_output.textContent = total_code;
    }
});