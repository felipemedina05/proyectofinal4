

import './App.css'

import { BrowserRouter, Routes, Route } from "react-router-dom";
import { useState } from 'react';
import Login from './components/login';
import Register from './components/Register';




const App = () => {
  const [isAuthenticated, setIsAuthenticated] = useState(true);
  const [isRegistering, setIsRegistering] = useState(false);

  const handleLogin = () => {
    setIsAuthenticated(true);
  };

  const handleLogout = () => {
    setIsAuthenticated(false);
  };


  const handleRegister = () => {
    setIsAuthenticated(true);
  };

  const toggleForm = () => {
    setIsRegistering(!isRegistering);
  };

  return (
    <div>
    {isAuthenticated ? (
        <>
   
       <BrowserRouter>
      <Routes>
      
        <Route  path='/' element={<Layout onLogout={handleLogout} />}>
        <Route path='/home' element={<Home></Home>} ></Route>
        <Route path='/usuarios' element={<Usuarios/>}></Route>
         <Route path="/edit" element={<Edit />}></Route>
          <Route path="*" element={<NoPage />} />
        </Route>

      </Routes>
    </BrowserRouter>

         
        </>
      ) : isRegistering ? (
        <Register onRegister={handleRegister} toggleForm={toggleForm} />
      ) : (
        <Login onLogin={handleLogin} toggleForm={toggleForm} />
      )}
    </div>
  );
};

export default App;