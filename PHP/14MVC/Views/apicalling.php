<!--  form-12 -->
<section class="w3l-form-12">
    <div class="form-12-content py-5" id="services">
        <div class="container py-md-3">
            <ul id="dispdata"></ul>
        </div>
    </div>
</section>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
<script>
    // $.ajax({
    //     url:"http://localhost/laravel/29Sept_laravel_TTS2/PHP/15API/allusers",
    //     success: function (response) {
    //         console.log(response);
    //         let data = JSON.parse(response)
    //         console.log(data);
    //         htmlulli = '';
    //         data.Data.forEach(element => {
    //             htmlulli += "<li>"+element.username+"</li>"
    //             // console.log(element.username);
    //         });
    //         console.log(htmlulli);
    //         $("#dispdata").html(htmlulli)
    //     }
    // })
    fetch("http://localhost/laravel/29Sept_laravel_TTS2/PHP/15API/allusers").then(res => res.json()).then((data) => {
        htmlulli = '';
        data.Data.forEach(element => {
            htmlulli += "<li>" + element.username + "</li>"
        });
        console.log(htmlulli);
        $("#dispdata").html(htmlulli)
    })
</script>
<!-- // form-12 -->