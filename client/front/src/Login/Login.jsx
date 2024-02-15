import styles from './Login.module.css';
import background from '../bg.jpg'

import React, { useState } from 'react';

function Login() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await fetch('http://localhost:8000/api/login', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, password }),
      });
        let token = await response.json()
      // console.log(token)
      if (response.ok) {

        // let v = response
        // alert("az",v)
        console.log("az", token)
        localStorage.setItem("user", JSON.stringify(token));


        window.location.href = '/';
      } else {
        console.error('Invalid logins');
      }
    } catch (error) {
      console.error('Connection error :', error);
    }
  };

  return (
    <div className={styles.login} style={{ backgroundImage:`url(${background})` }}>
      <div className={styles.box}>

        <h1 className={styles.title}>Login</h1>

        <input className={styles.text} type="email" placeholder="E-Mail" value={email} onChange={handleEmailChange}/>
        <input className={styles.text} type="password"  placeholder="Password" value={password} onChange={handlePasswordChange}/>
        
        <button type="submit" className={styles.lgnbtn} onClick={handleSubmit}>Login</button>
      
      </div>
    </div>
  );
}

export default Login;