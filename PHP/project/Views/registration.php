<style>
    .w3l-form-12 .grid-column-2 {
        grid-template-columns: auto 0fr
    }

    .column1 {
        width: 50%;
        margin: 0 auto;
    }

    input+span {
        color: red;
        margin-left: 5px;
    }
</style>
<!--  form-12 -->
<section class="w3l-form-12">
    <div class="form-12-content py-5" id="services">
        <div class="container py-md-3">
            <div class="grid grid-column-2 py-md-5">

                <div class="column1">
                    <h4 class="tagline text-center">Registration</h4>
                    <!-- <p>Fill in below form to find your courses</p> -->
                    <!-- <form method="post" onsubmit=""> -->
                    <form method="post" id="registForm">
                        <div class="">
                            <input type="text" name="username" onblur="checkreq(this)" class="form-input" placeholder="User Name" required>
                        </div>
                        <div class="">
                            <input type="password" name="password" onblur="checkreq(this)" class="form-input" placeholder="User Password" required>
                        </div>
                        <div class="">
                            <input type="email" id="email" name="email" class="form-input" placeholder="User Email" required>
                        </div>
                        <div class="">
                            <input type="tel" name="mobile" onblur="checkreq(this)" class="form-input" placeholder="User Mobile" onkeypress="return (event.which >=48 && event.which <=57 )" required>
                        </div>
                        <div class="">
                            <button type="submit" onclick="registerData()" name="register" class="btn btn-secondary btn-theme2">Submit</button>
                        </div>
                    </form>
                    <div class="my-3 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function registerData() {
        event.preventDefault();
        let FormData = $("#registForm").serializeArray()
        console.log(FormData);
        var result = {};
        $.each(FormData, function() {
            result[this.name] = this.value;
        });
        console.log(result);
        let header_for_post = {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(result) // body data type must match "Content-Type" header
        }
        fetch("http://localhost/laravel/29Sept_laravel_TTS2/PHP/15API/registration", {
            header_for_post
        }).then(res => res.json()).then((response) => {
            console.log(response);
        })
    }

    function checkreq(e) {
        const el = e;
        const newEl = document.createElement("span");
        const newContent = document.createTextNode("This field is required");
        newEl.appendChild(newContent);
        if (el.value == "") {
            if (e.nextSibling.nodeName == "SPAN") {
                e.nextSibling.remove();
                el.after(newEl);
            } else {
                el.after(newEl);
            }
        } else {
            e.nextSibling.remove();
        }
    }
    document.getElementById("email").addEventListener("keyup", function() {
        // console.log(event);
        const el = this;
        console.log(this.value);
        const newEl = document.createElement("span");
        const newContent = document.createTextNode("Invalid email format");
        newEl.appendChild(newContent);
        // let pattern = /^+$/;
        let pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        console.log(pattern.test(this.value));
        if (pattern.test(this.value)) {
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove();
                // el.after(newEl);
            }
        } else {
            console.log("inside false", this.nextSibling);
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove();
                el.after(newEl);
            } else {
                el.after(newEl);
            }
        }
    })
</script>
<!-- // form-12 -->