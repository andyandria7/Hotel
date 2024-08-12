const categories = [
    { button: 'btnbreakfast', element: 'breakfast' },
    { button: 'btnburgers', element: 'burgers' },
    { button: 'btnpizza', element: 'pizza' },
    { button: 'btngrillade', element: 'grillade' },
    { button: 'btnpatte', element: 'patte' },
    { button: 'btntarte', element: 'tarte' },
    { button: 'btnsalade', element: 'salade' },
    { button: 'btnspecial', element: 'special' },
    { button: 'btnglace', element: 'glace' },
    { button: 'btncookies', element: 'cookies' },
    { button: 'btnpatiserie', element: 'patiserie' },
    { button: 'btnpudding', element: 'pudding' },
    { button: 'btnSaladeDeFruit', element: 'SaladeDeFruit' },
    { button: 'btntartesD', element: 'tartesD' },
    { button: 'btngateau', element: 'gateau' },
    { button: 'btnspecialD', element: 'specialD' },
    { button: 'btnstar', element: 'star' },
    { button: 'btnbChaude', element: 'bChaude' },
    { button: 'btncocktails', element: 'cocktails' },
    { button: 'btnmilkshakes', element: 'milkshakes' },
    { button: 'btnwines', element: 'wines' }
];

function none() {
    categories.forEach(category => {
        document.getElementById(category.element).style.display = 'none';
    });
}

categories.forEach(category => {
    document.getElementById(category.button).addEventListener('click', () => {
        none();
        document.getElementById(category.element).style.display = 'block';
    });
});

const selectMenu = document.querySelector(".form-select");
const headerFood = document.querySelector(".headerFood");
const nouriture = document.getElementById("nouriture");
const desserts = document.getElementById("desserts");
const boisson = document.getElementById("boisson");

selectMenu.addEventListener('change', () => {
    const selectedOption = selectMenu.value;
    switch (selectedOption) {
        case "1":
            nouriture.style.display = 'block';
            desserts.style.display = 'none';
            boisson.style.display = 'none';
            headerFood.style.background = 'url(../assets/image/hero-slider-3.jpg) no-repeat center/cover';
            none();
            break;
        case "2":
            nouriture.style.display = 'none';
            desserts.style.display = 'block';
            boisson.style.display = 'none';
            headerFood.style.background = 'url(../assets/image/service-1.jpg) no-repeat center/cover';
            none();
            break;
        case "3":
            nouriture.style.display = 'none';
            desserts.style.display = 'none';
            boisson.style.display = 'block';
            headerFood.style.background = 'url(../assets/image/service-3.jpg) no-repeat center/cover';
            none();
            break;
        default:
            nouriture.style.display = 'none';
            desserts.style.display = 'none';
            boisson.style.display = 'none';
            headerFood.style.background = '';
            none();
            break;
    }
});
