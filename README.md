---
How to write doctrine type "tinyint" 
---

### to your Symfony project

Add ```tinyint:  GepurIt\TinyintType\TynyintDoctrineType``` to types of dbal in doctrine. See example:

```yaml
# Doctrine Configuration
doctrine:
    dbal:
        default_connection: default
        connections:
            default:     
            some_other:
                
        types:
            email:  GepurIt\TinyintType\TynyintDoctrineType

```

SQL type = 'TINYINT(1)'.

Example of entity:

```php
namespace YourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/** Class EntityWithEmailField
  * @package YourBundle\Entity
  *
  * @ORM\Table(
  *     name="your_table_name",
  *     options={"collate"="utf8mb4_unicode_ci", "charset"="utf8mb4"}
  * )
  * @ORM\Entity(repositoryClass="YourBundle\Repository\EntityWithTynyintFieldRepository")
  * @ORM\HasLifecycleCallbacks()
  * @codeCoverageIgnore
  */
class EntityWithTynyintField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="direction", type="tinyint", nullable=false)
     */
    protected $direction = 0;

    /**
     * @return int
     */
    public function getDirection(): int
    {
        return $this->direction;
    }

    /**
     * @param int $direction
     */
    public function setDirection(int $direction): void
    {
        $this->direction = $direction;
    }
}
```
