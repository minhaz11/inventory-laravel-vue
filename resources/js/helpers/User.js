import Token from './Token';
import AppStorage from './AppStorage';

class User {
   responseAfterLogin(res){
       const accessToken = res.data.access_token
       const username = res.data.name

       if(Token.isValid(accessToken)){
           AppStorage.store(accessToken,username)
       }
   }

   hasToken(){
       const storedToken = localStorage.getItem('token') 
       if(storedToken){
           return Token.isValid(storedToken) ? true : false
       }
       return false
   }

   loggedIn(){
       return this.hasToken()
   }

   userName(){
       if(this.loggedIn()){
           return localStorage.getItem('user')
       }
   }
   id(){
       if(this.loggedIn()){
           const payload = Token.payload(localStorage.getItem('token'))
           return payload.sub
       }

       return false
   }

}

export default User = new User();