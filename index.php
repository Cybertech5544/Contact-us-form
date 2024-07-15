
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give us your experience</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="logo/logo.png" alt="Logo">
            </div>
            <nav>
                <button class="back">back to home</button>
                <button class="start">contact us</button>
                <!-- <a  href="index.html">home</a> -->
                <!-- <a href="#">contact us</a> -->
            </nav>
        </header>
        <main>
            <section class="sec" id="sec1">
                <div class="home">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ducimus ipsa quisquam veniam iusto quaerat dignissimos maxime recusandae id, sapiente corporis cum beatae! Reiciendis tempora illo beatae accusamus neque dolorum!</p>
                    <button class="start">contact us</button>
                </div>
                <div class="contactus">
                    <h1>Contact Us</h1>
                    <form action="connect.php" method="post">
                        <div class="s-name">
                            <div class="name">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="f-name">
                            </div>
                            <div class="name">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="l-name">
                            </div>
                        </div>
                        <div class="con">
                            <div class="ph">
                                <label for="ph">Phone Number</label>
                                <input type="number" name="ph" id="ph">
                            </div>
                            <div class="ph">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="add">
                            <label for="stadd">Street Address</label>
                            <input type="text" name="stadd" id="stadd">
                            <label for="stadd2">Street Address Line 2</label>
                            <input type="text" name="stadd2" id="stadd2">
                            <div class="s-add">
                                <div class="s-s-add">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city">
                                </div>
                                <div class="s-s-add">
                                    <label for="st">State</label>
                                    <input type="text" name="st" id="st">
                                </div>
                            </div>
                            <label for="pin">Zip Code</label>
                            <input type="number" name="pin" id="pin">
                        </div>
                        <div class="message">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                    <button type="submit">Submit Now</button>
                    </form>
                </div>
            </section>
            <section class="sec" id="sec2">
                <div class="home-img img1">
                    <img src="Website Design.gif" alt="">
                </div>
                <div class="home-img img">
                    <img src="Singing Contract.gif" alt="">
                </div>
            </section>
        </main>
    </div>

  <script>
    const start = document.querySelectorAll('.start');
const back = document.querySelector('.back');
const img1 = document.querySelector('.img1');
const img = document.querySelector('.img');
const home = document.querySelector('.home');
const contactus = document.querySelector('.contactus');


start.forEach(start => {
start.addEventListener('click', () => {


        img.style.transform = `translateY(${ 100}%)`;
        img1.style.transform = `translateY(${100}%)`;
        home.style.transform = `translateX(${ 100}%)`;
        contactus .style.transform = `translateX(${100}%)`;

});
});

back.addEventListener('click', () => {


        img.style.transform = `translateY(${ 0}%)`;
        img1.style.transform = `translateY(${0}%)`;
        home.style.transform = `translateX(${ 0}%)`;
        contactus.style.transform = `translateX(${0}%)`;

});


  </script>
</body>

</html>
