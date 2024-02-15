import React, { useState } from 'react';
import styles from './Register.module.css';
import background from '../bg.jpg';

function Register() {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');

  const handleNameChange = (e) => {
    setName(e.target.value);
  };

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleConfirmPasswordChange = (e) => {
    setConfirmPassword(e.target.value);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    if (password !== confirmPassword) {
      console.error('Passwords do not match');
      return;
    }

    try {
      const response = await fetch('http://localhost:8000/api/register', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name, email, password }),
      });

      if (response.ok) {
        console.log('User registered successfully');
      } else {
        console.error('Registration failed:', response.statusText);
      }
    } catch (error) {
      console.error('Connection error:', error);
    }
  };

  return (
    <div className={styles.register} style={{ backgroundImage: `url(${background})` }}>
      <div className={styles.box}>
        <h1 className={styles.title}>Register</h1>
        <input className={styles.text} type="text" placeholder="Name" value={name} onChange={handleNameChange} />
        <input className={styles.text} type="text" placeholder="E-Mail" value={email} onChange={handleEmailChange} />
        <input className={styles.text} type="password" placeholder="Password" value={password} onChange={handlePasswordChange} />
        <input className={styles.text} type="password" placeholder="Confirm Password" value={confirmPassword} onChange={handleConfirmPasswordChange} />
        <button type="submit" className={styles.rgsbtn} onClick={handleSubmit}>Register</button>
      </div>
    </div>
  );
}

export default Register;
