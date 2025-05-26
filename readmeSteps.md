# Doctrine


**Install Doctrine**
```composer require doctrine```

**Check .env connections**
```symfony var:export --multiline```

**Crear nueva entidad**
```symfony console make:entity```

**Validar schema**
```symfony console doctrine:schema:validate```


**To create the tables - create migrations!**
```symfony console make:migration```

**To list/view all migrations and its status**
```symfony console doctrine:migrations:list```

**To add/migrate migrations (tables)**
```symfony console doctrine:migrations:migrate```

**To SQL directly on cli**

```symfony console doctrine:query:sql 'SELECT * FROM doctrine_migration_versions'```

```symfony console doctrine:query:sql 'SELECT * FROM starship'```


# Fixtures Data
```composer require --dev orm-fixtures```

**Persist created fixtures**
```symfony console doctrine:fixtures:load```

# DQL language
**Doctrine Query Language** -> Instead of querying from tables, DQL you think on terms of querying Entity Objects
```symfony console doctrine:query:dql 'select s from App\Entity\Starship s'```


# Foundry & Faker
```composer require --dev foundry```

**Lista todas las entidades que todavía no tienen Factory**
```symfony console make:factory```

# Pagination with pagerfanta
```composer require babdev/pagerfanta-bundle pagerfanta/doctrine-orm-adapter```

# Update entity (Add new attribute)
```symfony console make:entity Starship```

# Make new command (app:ship:remove)
```symfony console make:command```

**Use the command:** ```symfony console app:ship:remove uss-leafycruiser-ncc-0001```

# Questions
* How to update an entity (table) to add new rows
