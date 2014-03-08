require 'formula'

class Ftjam < Formula
  url 'http://sourceforge.net/projects/freetype/files/ftjam/2.5.2/ftjam-2.5.2.tar.bz2'
  homepage 'http://www.freetype.org/jam/'
  sha1 '08bad35e74ec85c4592d378014586174d22297b5'

  def install
    system "./configure", "--prefix=#{prefix}"
    system 'make'
    system 'make install'
  end
end
