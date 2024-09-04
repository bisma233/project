<style>
    header{
        height: 75vh;
        background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/proj8.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .header-content h1{
    color: white;
    font-size: 47px;
    font-weight: 600;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.9),
    4px 4px 4px rgba(0, 0, 0, 0.9);
}

.header-content {
    position: absolute;
    text-align: center;
    top: 77%;
    left: 50%;
    transform: translate(-50%, -50%);
}
section{
    margin-bottom: 50px;
}
.Overview h1{
    color:navy;
    text-align: center;
    font-weight: 700;
    font-size: 50px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
}
.Overview p{
    position: absolute;
    font-size: 17px;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 118%;
    text-align-last: center;
}
.project h2{
    margin-top: 140px;
     font-size: 40px;
     text-align: center;
     color: #141a46;
     text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
}
.column{
    position: relative;
    float: left;
    width: 33.33%;
    transition: transform 0.6s ease;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
    overflow: hidden; /* Ensures the content doesn't overflow the container */
    height: 300px;
}
.column img{
    width: 100%; /* Ensure the image fills the width of the column */
    height: 100%; /* Set the height to 100% to fill the column */
    object-fit: cover; /* Ensures the image covers the entire area, cropping if necessary */
    background: rgba(0, 0, 0, 0.4);
}
.column:hover{
    transform: translateY(-20px);
}
.row{
    margin-top: 43px;
}
.overlay{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
     opacity: 0;
     transition: 0.6s;
 }
 .image-text{
     color: #fff;
     font-size: 20px;
     font-weight: bold;
     text-align: center;
     padding: 20px;
 }
.column:hover .overlay{
    opacity: 1;
}

.row::after{
    content: "";
    display: table;
    clear: both;
}
/****sections stylings*****/
/* section{
    height:auto;
}
.text-box{
    margin: 0 7 rem;
}

p{
    color: black;
    font-weight: 500;
    margin-bottom: 20px;
} */

</style>