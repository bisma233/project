<style>
/* Header Styling */
header {
    height: 70vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/customer-gives-money-worker-successfully-installing-solar-panels_359031-33916.avif');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}

.header-content {
    position: absolute;
    text-align: center;
    top: 87%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.header-content h2{
  color:#fff;
  font-size: 50px;
  font-family: 'playwrite netherland';
}

/* Showcase Section Styling */
.container {
    max-width: 1700px;
    width: 90%;
    margin: 0 auto;
}

.showcase {
    background: #ddd;
    padding: 10rem 0 3rem 0;
    font-family: 'Montserrat', sans-serif;
}

/* Row Styling */
.row {
    display: flex;
    flex-wrap: wrap;  /* Allows rows to wrap in smaller screens */
    height: auto;
    background-color: #fff;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.329);
    font-size: 20px;
    margin-bottom: 3rem;
}
.row .text-box p{
    font-size: 17px;
}
/* Image and Text Box Styling */
.img-box, .text-box {
    width: 50%;
    padding: 3rem;
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Adjusting specific rows for different layouts */
.row1 .img-box, .row3 .img-box {
    order: 1;  /* Default order */
    height: 400px;
}
.row1 .text-box, .row3 .text-box {
    order: 2;
}

.row2 .img-box, .row4 .img-box {
    order: 2;  /* Reversed order for this row */
}

.row2 .text-box, .row4 .text-box{
    order: 1;
}

/* Final Row with Bank Financing */
.row5 {
    height: 100px;
    background-color: #263238;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
}

.row5 p {
    margin: 0 1rem;
    font-size: 16px;
    text-align: center;
}

#payButton {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
}

#payButton img {
    height: 80px;
    width: auto;
    vertical-align: middle;
}

.row5 p + p {
    margin-left: 1rem;
}
</style>