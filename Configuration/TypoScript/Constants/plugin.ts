plugin.tx_neuron_impressum {
    view {
        # cat=plugin.tx_neuron_impressum/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:neuron/Resources/Private/Templates/
        # cat=plugin.tx_neuron_impressum/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:neuron/Resources/Private/Partials/
        # cat=plugin.tx_neuron_impressum/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:neuron/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_neuron_impressum//a; type=string; label=Default storage PID
        storagePid =
    }
}
