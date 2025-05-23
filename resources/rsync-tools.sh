#!/bin/bash

##
## Use rsync to upload new files from a folder
##
function rsync_to_downloads_keyman_com {
  local source=$1
  local dest=$2
  local ignore=$3

  if [[ $ignore == true ]]; then
    ignore=--ignore-existing
  else
    ignore=
  fi

  #rsync_args = (
  #  '-vtrp',                                  # verbose, preserve times, recurse, permissions
  #  '--chmod=Dug=rwx,Do=rx,Fug=rw,Fo=r',      # map Windows security to host security
  #  '--stats',                                # show statistics for log
  #  "--rsync-path=$REMOTE_RSYNC_PATH",        # path on remote server
  #  "--rsh=$RSYNC_HOME\ssh -i $USERPROFILE\.ssh\id_rsa -o UserKnownHostsFile=$USERPROFILE\.ssh\known_hosts",                              # use ssh
  #  "$source",                                # source path
  #  "$dstroot/$dest"                          # target server + dest path
  #)

  pushd $source

  "$RSYNC_HOME"/rsync.exe \
    -vtrp \
    --chmod=Dug=rwx,Do=rx,Fug=rw,Fo=r \
    --stats --rsync-path="$REMOTE_RSYNC_PATH" \
    --rsh="$RSYNC_HOME\\ssh -i $USERPROFILE\\.ssh\\id_rsa -o UserKnownHostsFile=$USERPROFILE\\.ssh\\known_hosts" \
    $ignore \
    . \
    "$RSYNC_DEST/$dest"

  popd
}
