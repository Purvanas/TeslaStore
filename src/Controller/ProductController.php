<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/occasion', name: 'app_products')]
    public function index(): Response
    {
        // Données simulées des véhicules d'occasion
        $vehicles = [
            [
                'id' => 1,
                'name' => 'Tesla Model S',
                'price' => 89990,
                'year' => 2020,
                'mileage' => 45000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Retrouvez ce modèle sur le site Tesla Store. Performance exceptionnelle et autonomie remarquable. Intérieur premium et technologies avancées.',
                'isNew' => true,
                'isLowPrice' => false,
                'isPriceDrop' => true,
                'isQuick' => false
            ],
            [
                'id' => 2,
                'name' => 'Tesla Model 3',
                'price' => 42990,
                'year' => 2021,
                'mileage' => 32000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Le meilleur rapport qualité/prix de la gamme Tesla. Autonomie de 500km et accélération de 0 à 100km/h en 4,4s.',
                'isNew' => false,
                'isLowPrice' => true,
                'isPriceDrop' => false,
                'isQuick' => true
            ],
            [
                'id' => 3,
                'name' => 'Tesla Model X',
                'price' => 109990,
                'year' => 2019,
                'mileage' => 68000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'SUV électrique premium avec portes Falcon Wing. Espace généreux et technologies de pointe pour toute la famille.',
                'isNew' => false,
                'isLowPrice' => false,
                'isPriceDrop' => true,
                'isQuick' => false
            ],
            [
                'id' => 4,
                'name' => 'Tesla Model Y',
                'price' => 54990,
                'year' => 2022,
                'mileage' => 15000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'SUV compact électrique parfait pour la ville et les longs trajets. Autonomie de 480km et espace de chargement généreux.',
                'isNew' => true,
                'isLowPrice' => false,
                'isPriceDrop' => false,
                'isQuick' => true
            ],
            [
                'id' => 5,
                'name' => 'Tesla Model S Plaid',
                'price' => 129990,
                'year' => 2023,
                'mileage' => 5000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Version la plus performante de la Model S. 0 à 100km/h en 2,1s et autonomie de 600km. Le summum de la technologie Tesla.',
                'isNew' => true,
                'isLowPrice' => false,
                'isPriceDrop' => false,
                'isQuick' => true
            ],
            [
                'id' => 6,
                'name' => 'Tesla Model 3 Performance',
                'price' => 59990,
                'year' => 2020,
                'mileage' => 55000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Version sportive de la Model 3. Aérodynamique optimisée et performances exceptionnelles pour les amateurs de conduite.',
                'isNew' => false,
                'isLowPrice' => true,
                'isPriceDrop' => true,
                'isQuick' => true
            ],
            [
                'id' => 7,
                'name' => 'Tesla Model X Plaid',
                'price' => 139990,
                'year' => 2022,
                'mileage' => 12000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'SUV électrique le plus puissant de Tesla. 3 moteurs, 0 à 100km/h en 2,6s et autonomie de 560km.',
                'isNew' => true,
                'isLowPrice' => false,
                'isPriceDrop' => false,
                'isQuick' => true
            ],
            [
                'id' => 8,
                'name' => 'Tesla Model S Long Range',
                'price' => 79990,
                'year' => 2021,
                'mileage' => 38000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Autonomie maximale de 650km. Parfait pour les longs trajets avec confort et technologies de pointe.',
                'isNew' => false,
                'isLowPrice' => true,
                'isPriceDrop' => true,
                'isQuick' => false
            ],
            [
                'id' => 9,
                'name' => 'Tesla Model Y Long Range',
                'price' => 61990,
                'year' => 2023,
                'mileage' => 8000,
                'fuel' => 'Électrique',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'description' => 'Version longue autonomie du SUV compact. 560km d\'autonomie et espace de chargement optimisé.',
                'isNew' => true,
                'isLowPrice' => false,
                'isPriceDrop' => false,
                'isQuick' => true
            ]
        ];

        return $this->render('products/index.html.twig', [
            'vehicles' => $vehicles,
            'totalResults' => count($vehicles)
        ]);
    }

    #[Route('/produit/{id}', name: 'app_product_detail')]
    public function detail(int $id): Response
    {
        // Données simulées d'un véhicule (pour le test, tous les produits renvoient vers le même)
        $vehicle = [
            'id' => $id,
            'name' => 'Tesla Model S',
            'price' => 89990,
            'year' => 2020,
            'mileage' => 45000,
            'fuel' => 'Électrique',
            'transmission' => 'Automatique',
            'power' => '670 ch',
            'autonomy' => '610 km',
            'acceleration' => '3,1s (0-100 km/h)',
            'images' => [
                'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'
            ],
            'description' => 'La Tesla Model S est une berline électrique haut de gamme qui allie performance, autonomie et technologies de pointe. Avec son design élégant et ses performances exceptionnelles, elle représente l\'excellence de l\'automobile électrique.',
            'features' => [
                'Autopilot avancé',
                'Écran tactile 17 pouces',
                'Système audio premium',
                'Toit panoramique',
                'Sièges chauffants et ventilés',
                'Caméras de recul',
                'Charge rapide Supercharger',
                'Mise à jour logicielle OTA'
            ],
            'equipment' => [
                'Système de navigation GPS',
                'Bluetooth et WiFi',
                'Climatisation automatique',
                'Régulateur de vitesse adaptatif',
                'Freinage d\'urgence automatique',
                'Aide au stationnement',
                'Éclairage LED',
                'Jantes alliage 19 pouces'
            ],
            'options' => [
                'Peinture métallisée',
                'Intérieur cuir premium',
                'Système audio haut de gamme',
                'Jantes 21 pouces',
                'Toit ouvrant',
                'Pack performance',
                'Chargeur mural',
                'Service Tesla Premium'
            ]
        ];

        return $this->render('product/detail.html.twig', [
            'vehicle' => $vehicle
        ]);
    }
}
