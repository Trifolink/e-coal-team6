import React from 'react';
import axios from 'axios'; 


function Logout (props) {


// let user =JSON.parse( localStorage.getItem('user'))


const handleLogout = async () => {
  try {

    let user =JSON.parse(localStorage.getItem('user'))
    console.log("ghj", user.access_token, user)


    // const response = await axios({
    //     method: "get",
    //     url: "http://localhost:8000/api/logout",
    //     headers: {
    //       Authorization: "Bearer " + user.access_token
    //     }
    //   });
      

    const response = await axios.get("http://localhost:8000/api/logout",{
        headers: {
          Authorization: "Bearer " + user.access_token
        }
      });

    console.log(response.data.message);
    localStorage.removeItem('user');
    props.setConnected(false)

  } catch (error) {
    console.error('Erreur lors de la déconnexion:', error);
  }
};


  return (
    <button onClick={handleLogout}>Logout</button>
  );


}
export default Logout;



