RoutingExtraBundle
==================

Symfony2 Doctrine2 Database Router.
The services use Sonata Admin Bundle, so You have to install that for Admin.

**Install:**

First, we have to install the bundle namespace into
`app/kernel.php`:

```
  //...
  new Skillberto\RoutingExtraBundle\SkillbertoRoutingExtraBundle()
);
```

After that, the service for sonata admin
`app/config/config.yml`

```
imports:
      - { resource: "@SkillbertoRoutingExtraBundle/Resources/config/services.yml" }

```

In my opinion, this well be work as extension and use DI Container. But this is the future, now import that.
