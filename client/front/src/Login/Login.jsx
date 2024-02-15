import styles from './Login.module.css';
import background from '../bg.jpg'

function Login() {
  return (
    <div className={styles.login} style={{ backgroundImage:`url(${background})` }}>
        <div className={styles.box}>
            <h1 className={styles.title}>Login</h1>
        <input className={styles.text} type="text" placeholder='E-Mail'></input>
        <input className={styles.text} type="text" placeholder='Password'></input>
        <a type='submit' className={styles.lgnbtn}>Login</a>
        </div>
    </div>
  );
}

export default Login;