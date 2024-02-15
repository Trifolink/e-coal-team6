import styles from './Register.module.css';
import background from '../bg.jpg'

function Register() {
  return (
    <div className={styles.register} style={{ backgroundImage:`url(${background})` }}>
            <div className={styles.box}>
            <h1 className={styles.title}>Register</h1>
        <input className={styles.text} type="text" placeholder='Name'></input>
        <input className={styles.text} type="text" placeholder='E-Mail'></input>
        <input className={styles.text} type="text" placeholder='Password'></input>
        <input className={styles.text} type="text" placeholder='Confirm Password'></input>
        <a type='submit' className={styles.rgsbtn}>Register</a>
        </div>
    </div>
  );
}

export default Register;