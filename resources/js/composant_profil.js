import React, { useState, useEffect } from 'react';

const MyProfile = () => {
  const [userData, setUserData] = useState(null);

  useEffect(() => {
    const fetchUserData = async () => {
      try {
        const token = localStorage.getItem('authToken'); // Récupérez le token d'authentification à partir du stockage local
        const response = await fetch('/api/users', {
          headers: {
            'Authorization': `Bearer ${token}` // Ajoutez le token d'authentification dans le header de la requête
          }
        });
        const jsonData = await response.json();
        setUserData(jsonData);
      } catch (error) {
        console.error('Une erreur s\'est produite lors de la récupération des données utilisateur :', error);
      }
    };

    fetchUserData();
  }, []);

  return (
    <div>
      {/* Afficher les données utilisateur dans votre composant */}
      {userData && (
        <div>
          <h1>Nom d'utilisateur : {userData.username}</h1>
        </div>
      )}
    </div>
  );
};

export default MyProfile;