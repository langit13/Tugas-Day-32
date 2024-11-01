<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bagikan pengalaman Anda dalam menggunakan produk sepatu kami. Isi survei ini untuk membantu kami meningkatkan kualitas sepatu.">
    <meta name="keywords" content="survey sepatu, ulasan sepatu, sneakers, sepatu lari, sepatu formal, boots, feedback">
    <meta name="author" content="Your Name">
    <meta property="og:title" content="Survey Pengalaman Sepatu Anda">
    <meta property="og:description" content="Bagikan pengalaman Anda dengan produk sepatu kami dan bantu kami meningkatkan kualitas!">
    <meta property="og:image" content="URL_gambar_sepatu_jika_ada">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <title>Survey Sepatu - Bagikan Pengalaman Anda</title>

    <link href="https://unpkg.com/survey-core/defaultV2.min.css" type="text/css" rel="stylesheet">
    
    <script type="text/javascript" src="https://unpkg.com/survey-core/survey.core.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/survey-js-ui/survey-js-ui.min.js"></script>
</head>
<body>

    <div id="surveyContainer"></div>

    <script>
        // const SURVEY_ID = 1;

const surveyJson = {
    title: "Survey Pengalaman Sepatu Anda",
    description: "Bagikan pengalaman Anda menggunakan sepatu kami, apakah itu sneakers, sepatu lari, atau sepatu formal. Masukan Anda sangat berarti bagi kami.",
    elements: [{
        name: "name",
        title: "Nama",
        type: "text",
        isRequired:true
    }, {
        name: "shoeType",
        title: "Jenis Sepatu",
        type: "dropdown",
        isRequired:true,
        choices: [
                    { value: "sneakers", text: "Sneakers" },
                    { value: "running", text: "Sepatu Lari" },
                    { value: "formal", text: "Sepatu Formal" },
                    { value: "boots", text: "Boots" }
                ]
    }, { 
        type: "comment", name: "feedback", title: "Feedback", isRequired: true
    }]
};

const survey = new Survey.Model(surveyJson);

function alertResults (sender) {
    const results = JSON.stringify(sender.data);
    alert(results);
    // saveSurveyResults(
    //     "https://your-web-service.com/" + SURVEY_ID,
    //     sender.data
    // )
}

survey.onComplete.add(alertResults);

document.addEventListener("DOMContentLoaded", function() {
    survey.render(document.getElementById("surveyContainer"));
});

    </script>
</body>
</html>