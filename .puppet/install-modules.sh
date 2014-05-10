#!/bin/bash

if [ ! -d /vagrant/.puppet/modules ]; then
    puppet module install puppetlabs/stdlib --target-dir /vagrant/.puppet/modules --force
    puppet module install puppetlabs/concat --target-dir /vagrant/.puppet/modules --force
    puppet module install puppetlabs/apt --target-dir /vagrant/.puppet/modules --force
    puppet module install puppetlabs/firewall --target-dir /vagrant/.puppet/modules --force
    puppet module install puppetlabs/apache --target-dir /vagrant/.puppet/modules --force
    puppet module install puppetlabs/postgresql --target-dir /vagrant/.puppet/modules --force
fi
