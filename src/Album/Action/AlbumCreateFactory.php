<?php
namespace Album\Action;

use Album\Form\AlbumForm;
use Album\Model\Table\AlbumTable;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * Class AlbumCreateFactory
 *
 * @package Album\Action
 */
class AlbumCreateFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return AlbumCreateAction
     */
    public function __invoke(ContainerInterface $container)
    {
        $template   = $container->get(TemplateRendererInterface::class);
        $albumTable = $container->get(AlbumTable::class);
        $albumForm  = $container->get(AlbumForm::class);

        return new AlbumCreateAction($template, $albumTable, $albumForm);
    }
}