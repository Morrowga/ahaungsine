<style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap');

        #middle {
            font-size: 22px;
            font-family: 'PT Serif', serif;
        }

        .b{
            color: rgb(0,0,2, 0.8) !important;
            font-weight: bold !important; 
            transition-duration: 0.5s;
            letter-spacing: 1px;
        }

        .router-up:hover{
            text-decoration:none;
        }

        .b:hover{
            text-shadow: 2px 2px rgb(255,255,255, 0.4);
            padding-right: 5px !important;
        }

        .card-cat{
            border-radius: 0%;  
            box-shadow: 2px 2px 10px rgb(205,154,99);    
        }

        .post{
            border: 2px solid rgb(0,0,2, 0.8);
        }

        .img-post:hover{
            transform: scale(1.6);
            padding-left: 9px;
            transition-duration: 1s;
        }

        .bt-1{
            color: rgb(0,0,2, 0.8) !important;
            transform: perspective(1000px) rotateY(-45deg);
            transition-duration: 0.5;
            font-size: 25px;
            font-family: 'PT Serif', serif;
        }

        .bt-2{
            color: rgb(0,0,2, 0.8) !important;
            transform: perspective(1000px) rotateY(45deg);
            transition-duration: 0.5;
            font-size: 25px;
            font-family: 'PT Serif', serif;
        }

        .bt-3{
            color: rgb(0,0,2, 0.8) !important;
            transform: perspective(1000px) rotateY(-45deg);
            transition-duration: 0.5;
            font-size: 23px;
            font-family: 'PT Serif', serif;
        }

        .bt-1:hover{
            background-color: rgb(0,0,2, 0.8) !important;
            color: #fff !important;
        }

        .bt-2:hover{
            background-color: rgb(0,0,2, 0.8) !important;
            color: #fff !important;
        }

        .bt-3:hover{
            background-color: rgb(0,0,2, 0.8) !important;
            color: #fff !important;
        }

        .logo-text-o{
            font-size: 90px;
            text-align: right;
        }

        .logo-text-t{
            font-size: 90px;
            text-align: right;
        }

        .cat-b{
            border-radius: 0%;
            transition-duration: 1s;
            text-transform: uppercase;
            font-size: 13px !important;
            font-family: 'PT Sans', sans-serif;
        }

        .cat-b:hover{
            transform: scale(1.1);
        }

        .main-nav{
            background-image: url('https://image.freepik.com/free-photo/brown-old-paper-texture-vintage-paper-background_43379-475.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: auto;
        }

        .foot{
            background-image: url('https://image.freepik.com/free-photo/brown-old-paper-texture-vintage-paper-background_43379-475.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 70px;
        }

        .foot-n{
            text-decoration: none;
            color: rgb(0,0,2, 0.8);
            font-weight: bold;
            font-family: 'PT Serif', serif;
            font-size: 16px;
            text-transform: uppercase;
            display: block;
            letter-spacing: 2px;
        }
        
        .foot-n:hover{
            text-decoration: none;
            text-shadow: 2px 2px rgb(255,255,255, 0.4);
            color: #000;
            padding-right: 5px;
            transition-duration: 0.8s;
        }

        @media only screen and (max-width: 600px) {
            .logo-text-o{
                font-size: 30px;
                font-weight: bold;
            }

            .logo-text-t{
                font-size: 30px;
                font-weight: bold;
            }

            .b{
                font-size: 17px !important;
            }
            .bt-1{
                color: rgb(0,0,2, 0.8) !important;
                transform: perspective(1000px) rotateY(-45deg);
                transition-duration: 0.5;
                font-size: 25px;
                font-family: 'PT Serif', serif;
            }

            .bt-1{
                color: rgb(0,0,2, 0.8) !important;
                transform: perspective(1000px) rotateY(-45deg);
                transition-duration: 0.5;
                font-size: 15px;
                font-family: 'PT Serif', serif;
                width: 100px !important;
                margin-top: 4px !important;
                margin-right: 4px !important;
            }

            .bt-2{
                color: rgb(0,0,2, 0.8) !important;
                transform: perspective(1000px) rotateY(45deg);
                transition-duration: 0.5;
                font-size: 15px;
                font-family: 'PT Serif', serif;
                width: 100px !important;
            }

            .bt-3{
                color: rgb(0,0,2, 0.8) !important;
                transform: perspective(1000px) rotateY(-45deg);
                transition-duration: 0.5;
                font-size: 15px;
                font-family: 'PT Serif', serif;
                width: 100px !important;
            }

            .mo{
                margin-top: 2px !important;
            }
        }
</style>

<template>
    <div style="background: linear-gradient(to top, #ada996, #f2f2f2, #dbdbdb, #eaeaea);">
        <div class="main-nav">
            <b-navbar toggleable="lg" id="nav" type="light">
                <div class="container">
                    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
                    <b-collapse id="nav-collapse" is-nav>
                        <b-navbar-nav class="ml-auto" id="middle" right>
                            <b-nav-item href="/"><b class="b">HOME</b></b-nav-item>
                            <b-nav-item href="/about"><b class="b">ABOUT</b></b-nav-item>
                            <b-nav-item href="/contact"><b class="b">CONTACT</b></b-nav-item>
                        </b-navbar-nav>
                    </b-collapse>
                </div>
            </b-navbar>
            <div class="container mo mt-5">
                <div class="d-flex justify-content-ceter">
                    <div class="col">
                        <h1 class="logo-text-o">AHAUNG</h1>
                        <h1 class="logo-text-t">SINE</h1>
                    </div>
                    <div class="col">
                        <a href="/signin" class="router-up mt-4" ><button class="btn btn-outline-dark bt-1" style="display: block !important; width: 220px; border-radius: 0% !important;">SIGN IN</button></a>
                        <a href="/signup" class="router-up"><button class="btn btn-outline-dark mt-3 bt-2" style="display: block !important; width: 220px; border-radius: 0% !important;">SIGN UP</button></a>
                        <button class="btn btn-outline-dark mt-3 bt-3 mb-2" style="display: block !important; width: 220px; border-radius: 0% !important;">MARKET</button>
                    </div>
                </div>
            </div>
        </div><!--main-nav-->
        <div class="cat mt-3">
            <h2 style="text-align:center; font-family: 'PT Serif', serif;"><strong style="font-size: 37px;">L</strong>OOKING <strong>F</strong>OR</h2>
            <div>
                <div class="col-md-12" style="text-align:center">
                    <button class="btn btn-dark cat-b mt-1">Car & Car Accessories</button>
                    <button class="btn btn-dark cat-b mt-1">Motorbikes & Bicycles</button>
                    <button class="btn btn-dark cat-b mt-1">Clothing & Handmade</button>
                    <button class="btn btn-dark cat-b mt-1">Ancient Goods</button>
                    <button class="btn btn-dark cat-b mt-1">Cosmetics</button>
                    <button class="btn btn-dark cat-b mt-1">IT & Electronics</button>
                    <button class="btn btn-dark cat-b mt-1">Mobile Second Hand</button>
                    <button class="btn btn-dark cat-b mt-1">Toys</button>
                    <button class="btn btn-dark cat-b mt-1">Lighters & Scopes</button>
                    <button class="btn btn-dark cat-b mt-1">House & Kitchen Products</button>
                    <button class="btn btn-dark cat-b mt-1">Books</button>
                    <button class="btn btn-dark cat-b mt-1">Music Instruments</button>
                    <button class="btn btn-dark cat-b mt-1">Watches & Vapes</button>
                    <button class="btn btn-dark cat-b mt-1">Fancy Accessories</button>
                    <button class="btn btn-dark cat-b mt-1">Alcohol Drinks</button>
                    <button class="btn btn-dark cat-b mt-1">Furniture</button>
                    <button class="btn btn-dark cat-b mt-1">House & Land</button>
                    <button class="btn btn-dark cat-b mt-1">Plants & Pets</button>
                    <button class="btn btn-dark cat-b mt-1">Glasses & Shoes</button>
                    <button class="btn btn-dark cat-b mt-1">Camera & Canons</button>
                </div>
            </div>
        </div><!--cat-->
        <div class="col-md-12">
            <div class="card mt-3 card-cat">
                <div class="col-md-12">
                    <h2 class="mt-2" style="font-family: 'PT Serif', serif;">CAR</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <div class="card post">
                                <div class="card-body">
                                    <img class="img-fluid img-post" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Mercedes-Benz_240D_W115_%281%29.JPG/800px-Mercedes-Benz_240D_W115_%281%29.JPG" alt="">
                                    <h5 class="mt-3" style="font-weight:bold; font-family: 'PT Serif', serif; letter-spacing: 3px;">OLD CAR</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 14px;"><font-awesome-icon icon="globe-africa" class="pr-1"/>Yangon</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 12px;"><font-awesome-icon icon="clock" class="pr-1"/>10 seconds ago</p>
                                        </div>
                                    </div>
                                    <p style="font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="dollar-sign" class="mr-2 ml-1" style="font-size: 16px; color: rgb(52, 176, 40);" />10,000,000 Kyats</p>
                                    <p style="font-family: 'PT Sans', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsam quis, enim deleniti consequuntur sequi </p>
                                    <a href="#" class="face" style="text-decoration: none; color: rgb(0,0,2, 0.8); font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="user" class="pr-1 mr-2" style="font-size: 19px; color: rgb(180,129,80);" />Facebook Profile</a>
                                    <p style="font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="phone-alt" class="pr-1" style="font-size: 19px; color: rgb(52, 176, 40);" /> +959795864194</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3 card-cat">
                <div class="col-md-12">
                    <h2 class="mt-2" style="font-family: 'PT Serif', serif;">CAR ACCESSORIES</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <div class="card post">
                                <div class="card-body">
                                    <img class="img-fluid img-post" src="https://www.autoguide.com/blog/wp-content/uploads/2020/04/anker-mini-car-charger.jpg" alt="">
                                    <h5 class="pt-3" style="font-weight:bold; font-family: 'PT Serif', serif; letter-spacing: 3px;">OLD CAR BATTERY</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 14px;"><font-awesome-icon icon="globe-africa" class="pr-1"/>Yangon</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 12px;"><font-awesome-icon icon="clock" class="pr-1"/>10 seconds ago</p>
                                        </div>
                                    </div>
                                    <p style="font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="dollar-sign" class="mr-2 ml-1" style="font-size: 16px; color: rgb(52, 176, 40);" />10,000,000 Kyats</p>
                                    <p style="font-family: 'PT Sans', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsam quis, enim deleniti consequuntur sequi </p>
                                    <a href="#" class="face" style="text-decoration: none; color: rgb(0,0,2, 0.8); font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="user" class="pr-1 mr-2" style="font-size: 19px; color: rgb(180,129,80);" />Facebook Profile</a>
                                    <p style="font-family: 'PT Sans', sans-serif;"><font-awesome-icon icon="phone-alt" class="pr-1" style="font-size: 19px; color: rgb(52, 176, 40);" /> +959795864194</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--post-->
        <hr>
        <div class="foot">
            <div class="d-flex justify-content-center">
                <div class="col-md-12 mt-2" style="text-align: center;">
                    <a href="" class="foot-n">Terms & Conditions</a>
                    <a href="" class="foot-n">Customer Support</a>
                </div>
            </div>
        </div><!--foot-->
    </div><!--beginning-div-->        
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
