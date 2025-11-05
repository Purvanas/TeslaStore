<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/actualites', name: 'app_articles')]
    public function index(): Response
    {
        // Données simulées d'articles
        $articles = [
            [
                'id' => 1,
                'title' => 'Tesla Model 3 : La révolution électrique continue',
                'excerpt' => 'Découvrez les dernières innovations de la Model 3 et son impact sur le marché de l\'automobile électrique.',
                'content' => 'La Tesla Model 3 continue de révolutionner le marché de l\'automobile électrique avec ses performances exceptionnelles et son autonomie impressionnante. Cette berline compacte allie design moderne, technologies de pointe et respect de l\'environnement.',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Jean Dupont',
                'date' => new \DateTime('2024-01-15'),
                'category' => 'Innovation',
                'tags' => ['Tesla', 'Électrique', 'Innovation', 'Technologie']
            ],
            [
                'id' => 2,
                'title' => 'L\'avenir de la mobilité électrique en France',
                'excerpt' => 'Analyse des tendances et perspectives du marché français de l\'automobile électrique pour 2024.',
                'content' => 'Le marché français de l\'automobile électrique connaît une croissance exponentielle. Avec l\'augmentation des bornes de recharge et les incitations gouvernementales, l\'adoption des véhicules électriques s\'accélère.',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Marie Martin',
                'date' => new \DateTime('2024-01-10'),
                'category' => 'Marché',
                'tags' => ['France', 'Mobilité', 'Électrique', 'Marché']
            ],
            [
                'id' => 3,
                'title' => 'Guide complet : Comment choisir sa voiture électrique',
                'excerpt' => 'Nos experts vous donnent tous les conseils pour bien choisir votre premier véhicule électrique.',
                'content' => 'Choisir une voiture électrique peut sembler complexe. Autonomie, temps de charge, budget, usage... Voici un guide complet pour faire le bon choix selon vos besoins.',
                'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Pierre Durand',
                'date' => new \DateTime('2024-01-05'),
                'category' => 'Guide',
                'tags' => ['Guide', 'Conseils', 'Électrique', 'Achat']
            ],
            [
                'id' => 4,
                'title' => 'Tesla Supercharger : Le réseau de recharge le plus rapide',
                'excerpt' => 'Découvrez le réseau Supercharger Tesla et ses avantages pour les propriétaires de véhicules électriques.',
                'content' => 'Le réseau Supercharger Tesla offre la solution de recharge la plus rapide et la plus pratique pour les véhicules électriques. Avec plus de 50 000 bornes dans le monde, Tesla révolutionne la recharge.',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Sophie Leroy',
                'date' => new \DateTime('2024-01-01'),
                'category' => 'Technologie',
                'tags' => ['Tesla', 'Supercharger', 'Recharge', 'Réseau']
            ],
            [
                'id' => 5,
                'title' => 'Les avantages fiscaux des véhicules électriques en 2024',
                'excerpt' => 'Tout ce qu\'il faut savoir sur les aides et avantages fiscaux pour l\'achat d\'un véhicule électrique.',
                'content' => 'L\'État français encourage l\'achat de véhicules électriques par de nombreuses aides et avantages fiscaux. Bonus écologique, prime à la conversion, TVA réduite... Découvrez tous les dispositifs disponibles.',
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Thomas Bernard',
                'date' => new \DateTime('2023-12-28'),
                'category' => 'Fiscalité',
                'tags' => ['Fiscalité', 'Aides', 'Bonus', 'Prime']
            ],
            [
                'id' => 6,
                'title' => 'Test : Tesla Model Y Performance vs Model 3',
                'excerpt' => 'Comparaison détaillée entre les deux modèles phares de Tesla pour vous aider à choisir.',
                'content' => 'Tesla Model Y Performance et Model 3 : deux excellentes options, mais laquelle choisir ? Nous avons testé les deux modèles pour vous donner notre avis d\'expert.',
                'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'author' => 'Alexandre Moreau',
                'date' => new \DateTime('2023-12-20'),
                'category' => 'Test',
                'tags' => ['Test', 'Comparaison', 'Model Y', 'Model 3']
            ]
        ];

        // Articles mis en avant (featured)
        $featuredArticles = array_slice($articles, 0, 2);
        
        // Articles récents
        $recentArticles = array_slice($articles, 2, 4);

        return $this->render('articles/index.html.twig', [
            'featuredArticles' => $featuredArticles,
            'recentArticles' => $recentArticles,
            'allArticles' => $articles,
            'totalArticles' => count($articles)
        ]);
    }

    #[Route('/actualites/{id}', name: 'app_article_detail')]
    public function detail(int $id): Response
    {
        // Données simulées d'un article (pour le test, tous les articles renvoient vers le même)
        $article = [
            'id' => $id,
            'title' => 'Tesla Model 3 : La révolution électrique continue',
            'excerpt' => 'Découvrez les dernières innovations de la Model 3 et son impact sur le marché de l\'automobile électrique.',
            'content' => 'La Tesla Model 3 continue de révolutionner le marché de l\'automobile électrique avec ses performances exceptionnelles et son autonomie impressionnante. Cette berline compacte allie design moderne, technologies de pointe et respect de l\'environnement.

## Performances exceptionnelles

La Model 3 offre des performances remarquables avec une accélération de 0 à 100 km/h en seulement 3,1 secondes pour la version Performance. Son autonomie peut atteindre jusqu\'à 610 km selon le cycle WLTP, ce qui en fait l\'une des voitures électriques les plus efficaces du marché.

## Technologies de pointe

La Model 3 intègre les dernières technologies Tesla, notamment l\'Autopilot avancé, un écran tactile de 15 pouces, et des mises à jour logicielles over-the-air qui améliorent continuellement les performances du véhicule.

## Respect de l\'environnement

En choisissant une Model 3, vous contribuez à la réduction des émissions de CO2 et participez à la transition énergétique. Avec une empreinte carbone réduite sur l\'ensemble de son cycle de vie, la Model 3 est un choix responsable pour l\'avenir.',
            'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
            'author' => 'Jean Dupont',
            'date' => new \DateTime('2024-01-15'),
            'category' => 'Innovation',
            'tags' => ['Tesla', 'Électrique', 'Innovation', 'Technologie'],
            'readingTime' => 5,
            'views' => 1250
        ];

        return $this->render('article/detail.html.twig', [
            'article' => $article
        ]);
    }
}

