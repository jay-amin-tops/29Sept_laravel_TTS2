<style>
    .w3l-form-12 .grid-column-2 {
        grid-template-columns: auto 0fr
    }

    .column1 {
        width: 50%;
        margin: 0 auto;
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
                    <form method="post">
                        <div class="">
                            <input type="text" name="username" class="form-input" placeholder="User Name">
                        </div>
                        <div class="">
                            <input type="password" name="password" class="form-input" placeholder="User Password">
                        </div>
                        <div class="">
                            <input type="email" name="email" class="form-input" placeholder="User Email">
                        </div>
                        <div class="">
                            <input type="tel" name="mobile" class="form-input" placeholder="User Mobile">
                        </div>
                        <div class="">
                            <button type="submit" name="register" class="btn btn-secondary btn-theme2">Submit</button>
                        </div>
                    </form>
                    <div class="my-3 text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // form-12 -->