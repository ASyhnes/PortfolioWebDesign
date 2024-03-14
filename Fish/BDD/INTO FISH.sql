-- en trois étape:
-- etape 1: si les famille, serie et rarity n'existe pas, il faut les créer avec les valeur de la carte:

WITH inserted_familly AS (
    INSERT INTO familly (name, nb_familly)
    VALUES ('Madness', 3) 
    ON CONFLICT (name) DO NOTHING
    
), inserted_rarity AS (
    INSERT INTO rarity (star, tirage, verso_image)
    VALUES (1, 500, '1_2021_1_common.jpg')
	ON CONFLICT (verso_image) DO NOTHING
    
), inserted_serie AS (
    INSERT INTO serie (year, nb_in_year, serie_size, logo_image)
    VALUES (2021, 1, 8, 'Logo1.png') -- Assurez-vous que 'serie_size' est inclus correctement dans vos valeurs.
    ON CONFLICT (year,nb_in_year) DO NOTHING
    
)

-- etape 2: insérer le ou les poisson en changeant les information de la cartes :
INSERT INTO fish (firstname, serie_place, strong, dexterity, intelligence, image, familly_place)
VALUES ('CrazyFish', 2, 2, 5, 3, '1_2021_2_crazyfish_common.jpg', 1);

--etape 3: update le fish 
UPDATE fish
SET id_familly = (SELECT id FROM familly WHERE name = 'Madness'),
    id_rarity = (SELECT id FROM rarity WHERE star = 1 AND verso_image = '1_2021_1_common.jpg'),
    id_serie = (SELECT id FROM serie WHERE year = 2021 AND nb_in_year = 1)
WHERE firstname = 'CrazyFish';

