$(document).ready(function() {
    const translations = {
        en: {
            home: '<i class="fas fa-home"></i> Home',
            library: '<i class="fas fa-book"></i> Library',
            soundtrack: '<i class="fas fa-music"></i> Soundtrack',
            community: '<i class="fas fa-users"></i> Community',
            profile: '<i class="fas fa-user"></i> Profile',
            login: '<i class="fas fa-sign-in-alt"></i> Log In',
            signup: '<i class="fas fa-user-plus"></i> Sign Up',
            logout: '<i class="fas fa-sign-out-alt"></i> Logout',
            language: 'Language:'
        },
        es: {
            home: '<i class="fas fa-home"></i> Inicio',
            library: '<i class="fas fa-book"></i> Biblioteca',
            soundtrack: '<i class="fas fa-music"></i> Banda Sonora',
            community: '<i class="fas fa-users"></i> Comunidad',
            profile: '<i class="fas fa-user"></i> Perfil',
            login: '<i class="fas fa-sign-in-alt"></i> Iniciar Sesión',
            signup: '<i class="fas fa-user-plus"></i> Registrarse',
            logout: '<i class="fas fa-sign-out-alt"></i> Cerrar Sesión',
            language: 'Idioma:'
        }
    };

    const updateHeaderLanguage = function() {
        const selectedLanguage = $(this).val();
        const text = translations[selectedLanguage];

        $('#home').html(text.home);
        $('#library').html(text.library);
        $('#soundtrack').html(text.soundtrack);
        $('#community').html(text.community);
        $('#profile').html(text.profile);
        $('#login').html(text.login);
        $('#signup').html(text.signup);
        $('#logout').html(text.logout);
        $('#language').html(text.language);
    };

    $('input[name="language"]').on('change', updateHeaderLanguage);
});