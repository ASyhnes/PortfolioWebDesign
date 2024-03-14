-- Création des tables sans dépendances ou avec des dépendances vers l'extérieur
CREATE TABLE "effect" (
  "id" uuid PRIMARY KEY,
  "name_effect" varchar,
  "rule_script" varchar,
  "rule_lit" varchar
);

CREATE TABLE "rarity" (
  "id" uuid PRIMARY KEY,
  "star" integer,
  "tirage" integer
);

CREATE TABLE "serie" (
  "id" uuid PRIMARY KEY,
  "year" integer,
  "nb_in_year" integer,
  "serie_size" integer
);

CREATE TABLE "owner" (
  "id" uuid PRIMARY KEY,
  "erc20" varchar
);

-- Création de la table "familly" qui dépend de "effect"
CREATE TABLE "familly" (
  "id" uuid PRIMARY KEY,
  "name" varchar,
  "id_effect" uuid,
  "nb_familly" integer,
  FOREIGN KEY ("id_effect") REFERENCES "effect" ("id")
);

-- Création de la table "fish" qui dépend de "familly", "rarity" et "serie"
CREATE TABLE "fish" (
  "id" uuid PRIMARY KEY,
  "firstname" varchar,
  "id_familly" uuid,
  "familly_place" integer,
  "id_rarity" uuid,
  "id_serie" uuid,
  "serie_place" integer,
  "strong" integer,
  "dexterity" integer,
  "intelligence" integer,
  "gived" integer,
  "promoted" integer,
  "lore" varchar,
  FOREIGN KEY ("id_familly") REFERENCES "familly" ("id"),
  FOREIGN KEY ("id_rarity") REFERENCES "rarity" ("id"),
  FOREIGN KEY ("id_serie") REFERENCES "serie" ("id")
);

-- Création de la table "nft" qui dépend de "fish" et "owner"
CREATE TABLE "nft" (
  "id" uuid PRIMARY KEY,
  "id_fish" uuid, -- Correction du type pour correspondre à "fish.id"
  "id_owner" uuid, -- Correction du type pour correspondre à "owner.id"
  "distribution" varchar,
  FOREIGN KEY ("id_fish") REFERENCES "fish" ("id"),
  FOREIGN KEY ("id_owner") REFERENCES "owner" ("id")
);

ALTER TABLE familly
ADD CONSTRAINT familly_name_unique UNIQUE (name);

ALTER TABLE fish
ADD CONSTRAINT fish_firstname_unique UNIQUE (firstname);

ALTER TABLE familly ADD CONSTRAINT unique_name UNIQUE (name);
ALTER TABLE serie ADD CONSTRAINT unique_logo_image UNIQUE (logo_image);
ALTER TABLE fish ADD CONSTRAINT unique_firstname UNIQUE (firstname);


