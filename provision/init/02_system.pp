class { 'apt': }

package { 'git':
  ensure => 'installed'
}

package { 'vim':
  ensure => 'installed'
}

package { 'subversion':
  ensure => 'installed'
}

package { 'ntp':
  ensure => 'installed'
}

package { 'memcached':
  ensure => 'installed'
}

package { 'redis-server':
  ensure => 'installed'
}

package { 'python' :
  ensure => 'installed'
}

package { 'graphviz' :
  ensure => 'installed'
}

package { 'java-package' :
  ensure => 'installed'
}

class { 'ohmyzsh': }

ohmyzsh::install { 'vagrant': }

class { 'nodejs':
  version      => 'latest',
  make_install => false,
}

file { '.zshrc':
  path    => '/home/vagrant/.zshrc',
  ensure  => file,
  owner   => 'vagrant',
  group   => 'vagrant',
  source  => '/vagrant/provision/lib/conf/.zshrc',
}
