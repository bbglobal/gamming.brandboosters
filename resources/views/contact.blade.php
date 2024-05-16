@extends('layouts.main')

@push('title')
    <title>Brandboosters - Contact</title>
@endpush
@section('main-section')
    <section class="hero-other hero-about">
        <h1 class="animate__animated animate__jackInTheBox">
            <strong>Contact Us</strong>
        </h1>
    </section>

    @php
        require base_path('vendor/autoload.php');
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        if (isset($_GET['send'])) {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
        
            try {
                //Server settings
                $mail->SMTPDebug = 0; //Enable verbose debug output
                $mail->isSMTP(); //Send using SMTP
                $mail->Host = 'brandboostersglobal.com'; //Set the SMTP server to send through
                $mail->SMTPAuth = true; //Enable SMTP authentication
                $mail->Username = 'info@brandboostersglobal.com'; //SMTP username
                $mail->Password = 'Q~+,MS@~w&jB'; //SMTP password
                $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
                $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                //Recipients
                $mail->setFrom('info@brandboostersglobal.com', 'Brand Boosters Global');
                $mail->addAddress('david@brandbooosters.us', 'Brand Boosters Global');
        
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = "{$_GET['name']}, {$_GET['email']}";
                $mail->Body = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['service']} , <br/><br/> {$_GET['message']}";
        
                $mail->AltBody = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['service']} , <br/><br/> {$_GET['message']}";
        
                $mail->send();
                $sent = 'Success';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    @endphp
    <section class="pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="icon mb-3">
                        <img src="assets/img/phone.svg" alt="image" width="100px">
                    </div>
                    <div class="text">
                        <a href="tel:3159074273">
                            (315) 907-4273
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="icon mb-3">
                        <img src="assets/img/email.svg" alt="image" width="100px">
                    </div>
                    <div class="text">
                        <a href="mailto:info@brandboostersglobal.com">
                            info@brandboostersglobal.com
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="icon mb-3">
                        <img src="assets/img/address.svg" alt="image" width="100px">
                    </div>
                    <div class="text">

                        <address>
                            <a href="javascript:void(0)">
                                18 Georgia St, Valley Stream, NY 11580
                            </a>
                        </address>
                    </div>
                </div>
                <div class="col-12 my-5 pt-5 text-center">
                    <h2 style="color: #fff;">Come on <strong>Tell Us</strong></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <lottie-player src="https://lottie.host/ae1752f3-2fc1-4dc0-a6a0-6eec9e993026/zm0XsKyyjQ.json"
                            background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
                    </div>
                    <form method="get" class="col-12 col-md-12 col-lg-6">
                        <div class="mb-3 mt-3 col-12">
                            <label for="name" class="form-label">Name:</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <label for="number" class="form-label">Phone Number:</label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <label for="whatServices" class="form-label">Services:</label>
                            <select class="form-control" id="whatServices" name="service">
                                <option>--Select--</option>
                                <option value="Logo Design">Mascot Logo</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Video Animation">Video Animation</option>
                                <option value="Video Animation">Ecommerce</option>
                                <option value="Video Animation">Stream</option>
                                <option value="Website Desing and Development">Website Design and Development</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="services" class="form-label">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="btn-brandboosters" style="margin: auto;">
                            <a href="#">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
