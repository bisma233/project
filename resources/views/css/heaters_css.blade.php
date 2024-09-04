<style>
    header{
    height: 80vh;
    background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('/images/commercial-solar-water-heater-500x500.webp');
    background-repeat: no-repeat;
    background-size: 100% 90vh; 
    background-position: center;
}

.header-content h2{
  color: green;
  position: absolute;
  top: 50%;
  left: 18%;
  transform: translate(-50%, -50%);
  font-size: 40px;
  font-weight: 545;
}
.header-content p{
  color: #141a46;
  font-size: 20px;
  font-weight: 600;
  position: absolute;
  /* text-align: center; */
  top: 58%;
  left: 18%;
  transform: translate(-50%, -50%);
}


/*******************Sections Styling****************/
.section1{
  height: 310vh;
  background-color: rgb(249, 251, 253);
}
.text-box, .text-box2 {
  margin:0 7rem;
}
h2{
    font-size: 35px;
    font-weight: 525;
    display: flex;
    justify-content: center;
    text-align: center;
    color: navy;
    margin-top: 20px; 
    }
section h2{
  padding: 20px 0; 
}
.text-box p{
display: flex;
justify-content: center;
text-align: center;
}
p{
    font-weight: 500;
        margin-bottom: 20px;
        font-size: 20px;
}
section p{
  color: black;
  font-weight: 500;
  margin-bottom: 20px;
}
.box{
        box-sizing: border-box;
        background-color: navy;
        margin:5rem 7rem;
        color: #fff;
        padding: 1rem 3rem;
    }
    hr {
        border: 1px solid rgb(7, 255, 255); /* Change the color and thickness */
        width: 50%; /* Change the width */
        margin: 10px 2px; /* Center the line with margin */
    }
    h3{
        font-weight: 700;
        font-size: 25px;
        margin-top: 20px;
    }
    .box p{
        margin-top: 1rem;
        color: #fff;
    }
    button {
        padding: 15px 20px;
        background-color:darkcyan;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
      }
    button:hover {
        background-color:#fff;
        color: #000;
      }
.heater-img{
  height: 70vh;
  display: flex;
  justify-content: center;
  padding: 30px 0;
}
.text-box2 li{
    font-size:20px;
}

  /*-------------Image Section styling-------------*/

  .row{
    min-height: 100vh;
    /* width: 80%;  */
    margin: 5rem 0;
    padding-top: 5rem;
    background-color: aliceblue;
  }
  .row .imgwrapper{
    position: relative;
    width: 80%;
    left: 10%;
    top: 10%;
    padding-bottom: 100px;
  }
  .img1{
    float: right;
    height:300px;
    width: 500px;
    padding-left: 20px;
  }
  
  .text h2{
    display: flex;
    justify-content: start;
    text-align: start;
  }
  .text ul li{
      margin:auto;
      font-size: 20px;
  }
  .img2{
    float: left;
    height:400px;
    width: 650px;
    padding-right: 90px;
    
  }
  .text2 p{
    padding-left:90px; 
  }
  .text2 h2{
    display: flex;
    justify-content: start;
    text-align: start;
  }
  .text2 ul li{
  margin-left: 590px;
  font-size: 20px;
}

  /*------Table Section------*/
  .key-diff {
    background-color: rgb(247, 243, 243);
    padding: 10px 70px;
    margin: 5rem 0;
  }
  table{
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-7%);
    font-size: 1.5rem;
    border-collapse: collapse;
    width: 900px;
    height: 200px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
    margin: 15px 0;
  }
  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }
  th,td{
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #f4f4f4;
  }
  #diff{
    background-color: darkcyan;
    color: #fff;
  }
tr:hover{
  background-color: #f4f4f4;
  transform: scale(1.02);
  box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
}
@media only screen and (max-width:768px){
  table{
    width: 90%;
  }
}
</style>