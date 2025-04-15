<div
    style="margin:0;box-sizing:border-box;color:#505050;font-family:Roboto,sans-serif;font-size:14px;font-weight:400;line-height:1.3;min-width:100%;padding:0;text-align:left;width:100%!important">
    <span
        style="color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;opacity:0;overflow:hidden">Les
        Pros de la Comm du Bénin</span>

    <table style="background:#f3f3f3;border-collapse:collapse;width:100%">
        <tbody>
            <tr>
                <td align="center">
                    <center style="min-width:500px;width:100%">
                        <table style="margin:0 auto;width:100%">
                            <tbody>
                                <tr>
                                    <td height="50px"> &nbsp;</td>
                                </tr>
                            </tbody>
                        </table>

                        <table
                            style="background:#fff;border-top:7px solid #008559;border-radius:4px;margin:0 auto;width:640px"
                            align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <table style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <th style="padding:30px">
                                                        <p style="text-align:center;padding-bottom:10px">
                                                            <img src="{{ asset('assets/images/brand/logo1.png') }}"
                                                                style="object-fit: cover" width="130" height="100"
                                                                alt="Logo">
                                                        </p>
                                                        <p style="text-align:center;font-size:18px;color:#666">
                                                            Nouvelle adhésion - Les Pros de la Comm du Bénin
                                                        </p>

                                                        <p style="font-size:14px;color:#666">
                                                            Bonjour <strong style="color:#333">Admin</strong>,
                                                        </p>

                                                        <p style="font-size:15px;color:#666">
                                                            Vous avez reçu une nouvelle demande d’adhésion à de la part
                                                            de :
                                                        </p>

                                                        <p style="font-size:15px;color:#666">
                                                            <strong style="color:#333">Nom :</strong>
                                                            {{ $member['lastname'] }}
                                                        </p>

                                                        <p style="font-size:15px;color:#666">
                                                            <strong style="color:#333">Prénom :</strong>
                                                            {{ $member['firstname'] }}
                                                        </p>

                                                        @if (!empty($member['enterprise']))
                                                            <p style="font-size:15px;color:#666">
                                                                <strong style="color:#333">Nom d'entreprise :</strong>
                                                                {{ $member['enterprise'] }}
                                                            </p>
                                                        @endif

                                                        <p style="font-size:15px;color:#666">
                                                            <strong style="color:#333">Numéro de téléphone :</strong>
                                                            {{ $member['phone'] }}
                                                        </p>

                                                        <p style="font-size:15px;color:#666">
                                                            <strong style="color:#333">Email :</strong>
                                                            {{ $member['email'] }}
                                                        </p>

                                                        <p
                                                            style="margin-top:40px;text-align:center;font-size:14px;color:#666">
                                                            Cordialement, <br>
                                                            <strong>L’équipe support</strong>
                                                        </p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td height="30px"> &nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td height="30px"> &nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                </td>
            </tr>
        </tbody>
    </table>
</div>
