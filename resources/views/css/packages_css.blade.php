<style>
   header{
    height: 75vh;
    background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('images/energy-saving-concept-solar-panels-260nw-2243081559.webp');
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
}
.header-content h2{
  color:#fff;
  font-size: 50px;
  font-family: 'playwrite netherland';
}
.header-content{
  position: absolute;
  text-align: center;
  top: 87%;
  left: 50%;
  transform: translate(-50%, -50%);
} 
section .order a{
  /* background: #d7fada; */
  background: #4799f0;
  padding: 2px 10px;
  display: inline-block;
  border-radius: 40px;
  /* color: #2b2b2b; */
  font-size: 18px;
  color: #fff;
}
/* ----------Packages------*/

h1{
  font-size: 35px;
  display: flex;
  justify-content: center;
  text-align: center;
  color:#007bff ;
  margin-top: 40px;
}
h3{
  font-size: 30px;
  display: flex;
  justify-content: center;
  text-align: center;
  margin-bottom: 20px;
  font-weight: 600;
}
h4{
  font-size: 20px;
  display: flex;
  justify-content: center;
  text-align: center;
  margin: 0px 530px;
  background-color: #bdc3c7;
}
section{
  margin:20px 20px 40px 20px;
  border:8px solid black;
}

.package {
    height: 200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* border: 1px solid #ddd; */
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 8px;
    /* background-color: rgb(247, 243, 243); */  
}

.side-block {
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    margin: 40px 90px 40px 90px; 
    font-size: 30px;
}

.details {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-grow: 1;
}

.inverter, .panel, .batteries, .icon-price, .icon-saving {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    /* margin: 5px; */
}

.inverter img, .panel img, .icon-price i, .icon-saving i , .batteries img{
    width: 110px;
    height: 90px;
}
hr {
  border: 5px solid grey; /* Change the color and thickness */
  width: 70%; /* Change the width */
  margin: 0 280px; /* Center the line with margin */
}
 
  /*------Table Section------*/
  .key-diff {
    background-color: rgb(247, 243, 243);
    padding: 10px 50px;
    margin: 2rem 0;
  }
  table{
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-7%);
    font-size: 1.5rem;
    border-collapse: collapse;
    width: 1200px;
    height: 100px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
    margin: 15px 0;
  }
  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }
  th,td{
    padding: 8px;
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

/*-----------financing option---------*/
.finance{
  background-color: #4799f0;
  color: #fff;
}
.text{
  display: flex;
  justify-content: center;
  text-align: center;
  /* margin: 20px 10px; */
  font-weight: 50;
  font-family: 'playwrite netherland'; ;
} 
.text p{
  font-size: 20px;
}
.text p a{
  color: rgb(248, 164, 7);
}

</style>